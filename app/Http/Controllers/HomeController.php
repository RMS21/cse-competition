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

}
