<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;

class TeamController extends Controller{

    public function getTeamLogin(){

      if(Auth::check()){
        return redirect()->route('get_home');
      }

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
        return redirect()->route('get_home');
      }
    }

}
