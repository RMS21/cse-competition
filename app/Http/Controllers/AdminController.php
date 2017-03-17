<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\GameStatus;
use App\ReviewRequest;

class AdminController extends Controller
{
    public function getAdminHome(Request $request){

      AdminController::AdminAuthentication();

      $query = "select review_requests.stage as stage ,teams.id as team_id, teams.name as team_name, problems.id as problem_id, problems.title as problem_title, review_requests.state as state".
               " from teams, problems, review_requests".
               " where review_requests.problem_id = problems.id and review_requests.team_id = teams.id and state = 1";
      $review_requests = DB::select($query);

      if($request->ajax()){
        return response()->JSON(['review_requests' => $review_requests]);
      }


      return view('admin.admin_home', ['review_requests' => $review_requests]);
    }

    public function getStopGame($game_stage){
      AdminController::AdminAuthentication();

      if($game_stage > 4 || $game_stage < 1){
        return response()->JSON(['fail' => 'invalid game stage']);
      }

      $game_status = new GameStatus();
      $game_status->stage = $game_stage;
      $game_status->is_started = 0;
      $game_status->save();

      return response()->JSON(['success' => 'game stoped']);

    }


    public function getStartGame($game_stage){
      AdminController::AdminAuthentication();

      if($game_stage > 4 || $game_stage < 1){
        return response()->JSON(['fail' => 'invalid game stage']);
      }

      $game_status = new GameStatus();
      $game_status->stage = $game_stage;
      $game_status->is_started = 1;
      $game_status->save();

      return response()->JSON(['success' => 'game started']);
    }

    public function getAnswerProblem($team_id, $problem_id, $problem_answer){
      AdminController::AdminAuthentication();

      ReviewRequest::where([
                            ['team_id', '=', $team_id],
                            ['problem_id', '=', $problem_id]
                           ])->update(['state' => $problem_answer]);

     return "success";
    }

    public function getTeamRanking(){
      AdminController::AdminAuthentication();
      return view('admin.ranking');
    }


    private function AdminAuthentication(){
      if(!Auth::check()){
        return redirect()->route('get_team_login');
      }
      if(Auth::check()){
        if(Auth::user()->role !== "admin"){
          return redirect()->route('get_team_login');
        }
      }
    }


}
