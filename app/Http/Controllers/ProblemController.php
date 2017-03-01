<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Problem;
use App\GameStatus;
use App\BuyProblem;
use App\Team;
use App\User;

class ProblemController extends Controller
{

    public function getBuyProblem($problem_id){


      $problem = ProblemController::checkAuthorizationProblemControll($problem_id);

      $new_buyed_problem = new BuyProblem();
      $new_buyed_problem->problem_id = $problem_id;
      $new_buyed_problem->team_id = Auth::user()->id;
      $new_buyed_problem->save();

      $team_score = Auth::user()->score - $problem->score;
      Team::where('id', '=', Auth::user()->id)->update(['score' => $team_score]);

      return redirect()->route('get_show_problem', ['problem_id' => $problem_id]);

    }

    public function getShowProblem($problem_id){

      $problem = ProblemController::checkAuthorizationProblemControll($problem_id);

      $team = Auth::user();
      $team_members = User::where('team_id', '=', $team->id)->count();

      return view('user.show_problem', ['problem' => $problem, 'team' => $team, 'team_members' => $team_members]);
    }


    private function checkAuthorizationProblemControll($problem_id){

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
