<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;
use App\GameStatus;

class TeamController extends Controller{

    public function getTeamLogin(){
      return view('public.login');
    }

    public function postTeamLogin(Request $request){

      $this->validate($request, [
        'name' => 'required | alpha_dash',
        'password' => ['required', 'min: 4' , 'max: 50', 'regex:  /^[a-zA-Z0-9!@#\$\^\&*\)\(._-]+$/' ]
      ]);

      if(!Auth::attempt(['name' => $request->name, 'password' => $request->password])){
        return redirect()->back()->with(['fail' => 'نام کاربری یا رمزعبور اشتباه است']);
      }

      //checking if the team is admin or not
      $team = Team::where('name', '=', $request->name)->firstOrFail();
      if($team->role == "admin"){
        return "Admin";
      }
      else{
         //checking if game started or not
         $last_game_status = GameStatus::orderBy('created_at', 'desc')->first();
         if($last_game_status->is_started){
            return view('user.home');
         }
         else{
           return view('user.waiting');
         }
      }
    }

}
