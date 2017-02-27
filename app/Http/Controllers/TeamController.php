<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;

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
        return redirect()->back()->with(['fail' => 'Could not log you in!']);
      }

      $team = Team::where('name', '=', $request->name)->firstOrFail();
      if($team->role == "admin"){
        return "Admin";
      }
      else{
        return "team";
      }
    }

    public function getWaiting(){



    }
}
