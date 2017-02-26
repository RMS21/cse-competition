<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TeamController extends Controller{

    public function getTeamLogin(){
      return view('public.login');
    }

    public function postTeamLogin(Request $request){

      if(!Auth::attempt(['name' => $request->name, 'password' => $request->password])){
        return redirect()->back()->with(['fail' => 'Could not log you in!']);
      }
      return "loggedIn";
    }

    public function getWaiting(){



    }
}
