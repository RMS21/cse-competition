<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\GameStatus;
use App\User;
use App\Team;
use App\Problem;
use App\BuyProblem;

class HomeController extends Controller
{
    public function getHome(){

      if(!Auth::check()){
        return redirect()->route('get_team_login');
      }

      $team = Auth::user();
      $team_members = User::where('team_id', '=', $team->id)->count();

      //checking last game status
      $last_game_status = GameStatus::orderBy('created_at', 'desc')->first();
      $game_stage = is_null($last_game_status) ? null : $last_game_status->stage;
      $problems = is_null($game_stage) ? null : Problem::where('stage', '=', $last_game_status->stage)->get();
      $is_game_started = is_null($last_game_status) ? null : $last_game_status->is_started;

      return view('user.home', ['team' => $team, 'team_members' => $team_members, 'game_stage' => $game_stage, 'problems' => $problems, 'is_game_started' => $is_game_started]);
      }

      public function getLastGameStatus(Request $request){
         if(!Auth::check()){
             return redirect()->route('get_team_login');
         }


         $last_game_status = GameStatus::orderBy('created_at', 'desc')->first();
         if($last_game_status->is_started != $request->is_started){
             return response()->JSON(['redirect' => 1]);
         }

         return response()->JSON(['redirect' => 0]);
      }

}
