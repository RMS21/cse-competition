<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\GameStatus;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function getAdminHome(){
      if(!Auth::check()){
        return redirect()->route('get_team_login');
      }
      if(Auth::check()){
        if(Auth::user()->role !== "admin"){
          return redirect()->route('get_team_login');
        }
      }

      $query = "select review_requests.stage as stage ,teams.id as team_id, teams.name as team_name, problems.id as problem_id, problems.title as problem_title, review_requests.state as state".
               " from teams, problems, review_requests".
               " where review_requests.problem_id = problems.id and review_requests.team_id = teams.id and state = 1";
      $review_requests = DB::select($query);


      return view('admin.admin_home', ['review_requests' => $review_requests]);
    }

    public function getTeamRanking(){
      if(!Auth::check()){
        return redirect()->route('get_team_login');
      }
      if(Auth::check()){
        if(Auth::user()->role !== "admin"){
          return redirect()->route('get_team_login');
        }
      }

      return view('admin.ranking');
    }
}
