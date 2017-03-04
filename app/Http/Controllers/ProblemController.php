<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Problem;
use App\GameStatus;
use App\BuyProblem;
use App\Team;
use App\User;
use App\ReviewRequest;

class ProblemController extends Controller
{

    public function getBuyProblem($problem_id){


      $problem = ProblemController::checkAuthorizationProblemControl($problem_id);

      $new_buyed_problem = new BuyProblem();
      $new_buyed_problem->problem_id = $problem_id;
      $new_buyed_problem->team_id = Auth::user()->id;
      $new_buyed_problem->save();

      $team_score = Auth::user()->score - $problem->score;
      Team::where('id', '=', Auth::user()->id)->update(['score' => $team_score]);

      return redirect()->route('get_show_problem', ['problem_id' => $problem_id]);

    }

    public function getShowProblem($problem_id){

      $problem = ProblemController::checkAuthorizationProblemControl($problem_id);

      $team = Auth::user();
      $team_members = User::where('team_id', '=', $team->id)->count();

      return view('user.show_problem', ['problem' => $problem, 'team' => $team, 'team_members' => $team_members]);
    }


    public function getReviewRequestProblem($problem_id){

      ProblemController::checkAuthorizationProblemControl($problem_id);

      $new_review_request_problem = new ReviewRequest();
      $new_review_request_problem->team_id = Auth::user()->id;
      $new_review_request_problem->problem_id = $problem_id;
      $new_review_request_problem->state = 1;
      $new_review_request_problem->save();

      return redirect()->route('get_home');
    }

    public function getCancelProblem($problem_id){

      ProblemController::checkAuthorizationProblemControl($problem_id);

      return redirect()->route('get_home');
    }


    public function getProblemsLastState(){
      if(!Auth::check()){
        return redirect()->route('get_home');
      }




      //fetching problems
      $last_game_status = GameStatus::orderBy('created_at', 'desc')->first();
      $game_stage = is_null($last_game_status) ? null : $last_game_status->stage;


      if(Auth::user()->level == 'A'){
          $problem_level = 'C';
      }else if(Auth::user()->level == 'B'){
          $problem_level = 'D';
      }else{
          $problem_level = 'E';
      }

      $query = "Select problem_id as id, state from review_requests where review_requests.team_id = ".
                Auth::user()->id." and review_requests.problem_id in (Select id from problems where stage = ".
                $game_stage ." and  problems.level between 'A' and '". $problem_level ."')";
      $problems_status = DB::select($query);


      return response()->JSON(['problems_status' => $problems_status, 'team_score' => Auth::user()->score]);

    }



    private function checkAuthorizationProblemControl($problem_id){

      if(!Auth::check()){
        return redirect()->route('get_team_login');
      }

      $problem = Problem::find($problem_id);

      //cheching if the problem does not exists
      if(is_null($problem)){
        return redirect()->back();
      }

      //checking if requested problem is not belong to this stage
      $last_game_status = GameStatus::orderBy('created_at', 'desc')->first();
      if($problem->stage !== $last_game_status->stage){
        return redirect()->back();
      }

      //cheching if requested problems does not belong to team's level
      if(abs(ord($problem->level) - ord(Auth::user()->level) > 2)){
        return redirect()->back();
      }

      return $problem;
    }
}
