<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;
use App\User;

class TeamController extends Controller{

    public function getTeamLogin(){

      if(Auth::check()){
        if(Auth::user()->role == "admin"){
          return redirect()->route('get_admin_home');
        }
        return redirect()->route('get_home');
      }

      return view('public.login');
    }

    public function postTeamLogin(Request $request){

      $this->validate($request, [
        'name' => 'required | alpha_spaces',
        'password' => ['required', 'min: 4' , 'max: 50', 'regex:  /^[a-zA-Z0-9!@#\$\^\&*\)\(._-]+$/' ]
      ]);

      if(!Auth::attempt(['name' => $request->name, 'password' => $request->password])){
        return redirect()->back()->with(['fail' => 'نام کاربری یا رمزعبور اشتباه است']);
      }

      //checking if the team is admin or not
      $team = Team::where('name', '=', $request->name)->first();
      if($team->role == "admin"){
        return redirect()->route('get_admin_home');
      }
      else{
        return redirect()->route('get_home');
      }
    }

    public function getTeamRegister(){
        return view('public.register');
    }

    public function postTeamRegister(Request $request){

        $this->validate($request, [
        'team_name' => 'required | alpha_spaces',
        'password' => ['required', 'min: 4' , 'max: 50', 'regex:  /^[a-zA-Z0-9!@#\$\^\&*\)\(._-]+$/', 'confirmed' ],
        'password_confirmation' => ['required', 'min: 4' , 'max: 50', 'regex:  /^[a-zA-Z0-9!@#\$\^\&*\)\(._-]+$/'],
        'fname_1' => 'required | alpha_spaces',
        'lname_1' => 'required | alpha_spaces',
        'snumber_1' => 'required | numeric',
        'eyear_1' => 'required | numeric',
        'pnumber_1' => 'required | numeric',
        'email_1' => 'required | email',
        'uname_1' => 'required | alpha_spaces',
        'fname_2' => 'required | alpha_spaces',
        'lname_2' => 'required | alpha_spaces',
        'snumber_2' => 'required | numeric',
        'eyear_2' => 'required | numeric',
        'pnumber_2' => 'required | numeric',
        'email_2' => 'required | email',
        'uname_2' => 'required | alpha_sapces',
        'fname_3' => 'required | alpha_spaces',
        'lname_3' => 'required | alpha_spaces',
        'snumber_3' => 'required | numeric',
        'eyear_3' => 'required | numeric',
        'pnumber_3' => 'required | numeric',
        'email_3' => 'required | email',
        'uname_3' => 'required | alpha_spaces'
        ]);


        //checking for entered email
        if(($request->email_1 == $request->email_2) || ($request->email_1 == $request->email_3) || ($request->email_2 == $request->email_3)){
          return redirect()->back()->with('fail', 'ایمیل های یکسان وارد شده');
        }

        //checking for entered phone numbers
        if(($request->pnumber_1 == $request->pnumber_2) || ($request->pnumber_1 == $request->pnumber_3) || ($request->pnumber_2 == $request->pnumber_3)){
          return redirect()->back()->with('fail', 'شماره تلفن های یکسانی وارد شده');
        }

        //checking for entered student number
        if(($request->snumber_1 == $request->snumber_2) || ($request->snumber_1 == $request->snumber_3) || ($request->snumber_2 == $request->snumber_2)){
          return redirect()->back()->with('fail', 'شماره دانشجویی های یکسان وارد شده');
        }

        //checking for entered name and family
        if((($request->fname_1  == $request->fname_2) && ($request->lname_1 == $request->lname_2)) ||
          (($request->fname_1 == $request->fname_3) && ($request->lname_1 == $reqiest->lname_3))   ||
          (($request->fname_2 == $request->fname_3) && ($request->lname_2 == $request->lname_3))
        ){
            return redirect()->back()->with('fail', 'نام و نام خانوادگی های یکسانی وارد شده');
        }


        //checking if the team name exits
        if(Team::where('name', $request->team_name)->first() !== null){
            return redirect()->back()->with('fail', 'این نام تیم وجود دارد');
        }

        // checking if the first/second/third person is already registerd
        if((User::where('first_name',$request->fname_1)->first() !== null) && (User::where('last_name', $request->lname_1)->first() !== null)){
            return redirect()->back()->with('fail', 'نفر اول قبلا ثبت نام کرده است');
        }
        if((User::where('first_name',$request->fname_2)->first() !== null) && (User::where('last_name', $request->lname_2)->first() !== null)){
            return redirect()->back()->with('fail', 'نفر دوم قبلا ثبت نام کرده است');
        }
        if((User::where('first_name',$request->fname_3)->first() !== null) && (User::where('last_name', $request->lname_3)->first() !== null)){
            return redirect()->back()->with('fail', 'نفر سوم قبلا ثبت نام کرده است');
        }

        //checking for student number existance
        if(User::where('student_number', $request->snumber_1)->first() !== null){
            return redirect()->back()->with('fail', 'شماره دانشجویی نفر اول وجود دارد');
        }
        if(User::where('student_number', $request->snumber_2)->first() !== null){
            return redirect()->back()->with('fail', 'شماره دانشجویی نفر دوم وجود دارد');
        }
        if(User::where('student_number', $request->snumber_3)->first() !== null){
            return redirect()->back()->with('fail', 'شماره دانشجویی نقر سوم وجود دارد');
        }

        //checking for phone number existance
        if(User::where('phone_number', $request->pnumber_1)->first() !== null){
            return redirect()->back()->with('fail', 'شماره تلفن نفر اول وجود دارد');
        }
        if(User::where('phone_number', $request->pnumber_2)->first() !== null){
            return redirect()->back()->with('fail', 'شماره تلفن نفر دوم وجود دارد');
        }
        if(User::where('phone_number', $request->pnumber_3)->first() !== null){
            return redirect()->back()->with('fail', 'شماره تلفن نفر سوم وجود دارد');
        }

        //cheking for email existance
        if(User::where('email', $request->email_1)->first() !== null){
            return redirect()->back()->with('fail', 'ایمیل نفر اول وجود دارد');
        }
        if(User::where('email', $request->email_2)->first() !== null){
            return redirect()->back()->with('fail', 'ایمیل نفر دوم وجود دارد');
        }
        if(User::where('email', $request->email_3)->first() !== null){
            return redirect()->back()->with('fail', 'ایمیل نفر سوم وجود دارد');
        }
        $team = new Team();
        $team->name = $request->team_name;
        $level = round(($request->eyear_1 + $request->eyear_2 + $request->eyear_3) / 3);
        $level = $level <= 93 ? 'A' : ( $level == 94 ? 'B' : 'C');
        $team->level = $level;
        $team->role = "member";
        $team->score = 300;
        $team->password =  bcrypt($request->password);
        $team->save();

        $team_id = Team::where('name', '=', $request->team_name)->first()->id;

        $user1 = new User();
        $user1->team_id = $team_id;
        $user1->first_name = $request->fname_1;
        $user1->last_name = $request->lname_1;
        $user1->student_number = $request->snumber_1;
        $user1->phone_number = $request->pnumber_1;
        $user1->entery_year = $request->eyear_1;
        $user1->univercity = $request->uname_1;
        $user1->email = $request->email_1;
        $user1->save();

        $user2 = new User();
        $user2->team_id = $team_id;
        $user2->first_name = $request->fname_2;
        $user2->last_name = $request->lname_2;
        $user2->student_number = $request->snumber_2;
        $user2->phone_number = $request->pnumber_2;
        $user2->entery_year = $request->eyear_2;
        $user2->univercity = $request->uname_2;
        $user2->email = $request->email_2;
        $user2->save();

        $user3 = new User();
        $user3->team_id = $team_id;
        $user3->first_name = $request->fname_3;
        $user3->last_name = $request->lname_3;
        $user3->student_number = $request->snumber_3;
        $user3->phone_number = $request->pnumber_3;
        $user3->entery_year = $request->eyear_3;
        $user3->univercity = $request->uname_3;
        $user3->email = $request->email_3;
        $user3->save();

        Auth::login($team);

        return redirect()->route('get_home');

    }


    public function getLogout(){
      Auth::logout();
      return redirect()->route('get_team_login');
    }

}
