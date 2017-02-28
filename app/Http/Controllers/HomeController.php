<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\GameStatus;
use App\User;
use App\Team;
use App\Problem;

class HomeController extends Controller
{
    public function getHome(){

      // return Auth::logout();

      if(!Auth::check()){
        return redirect()->route('get_team_login');
      }

      $team_name = Auth::user()->name;
      $team = Team::where('name', '=', $team_name)->firstOrFail();

      //checking if game started or not
      $last_game_status = GameStatus::orderBy('created_at', 'desc')->first();
      if(!is_null($last_game_status)){
        if($last_game_status->is_started){

          $team_members = User::where('team_id', '=', $team->id)->count();
          $game_stage = $last_game_status->stage;
          $problems = Problem::where('stage', '=', $last_game_status->stage)->get();

          return view('user.home', ['team' => $team, 'team_members' => $team_members, 'game_stage' => $game_stage, 'problems' => $problems]);
        }else{
          return view('user.waiting');
        }
      }
      else {
        return view('user.waiting');
      }

    }


}
