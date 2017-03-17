<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
  'uses' => 'TeamController@getTeamLogin',
  'as' => 'get_team_login'
]);

Route::post('/', [
  'uses' => 'TeamController@postTeamLogin',
  'as' => 'post_team_login'
]);

Route::get('/logout', [
    'uses' => 'TeamController@getLogout',
    'as' => 'get_team_logout'
]);

Route::get('/register', [
    'uses' => 'TeamController@getTeamRegister',
    'as' => 'get_team_register'
]);

Route::post('/register', [
  'uses' => 'TeamController@postTeamRegister',
  'as' => 'post_team_register'
]);

Route::group(['middleware' => 'auth'], function(){

  Route::get('/home', [
    'uses' => 'HomeController@getHome',
    'as' => 'get_home'
  ]);

  Route::get('/buy/{problem_id}', [
    'uses' => 'ProblemController@getBuyProblem',
    'as' => 'get_buy_problem'
  ]);

  Route::get('/problem/{problem_id}', [
    'uses' => 'ProblemController@getShowProblem',
    'as' => 'get_show_problem'
  ]);

  Route::get('/problem/review/request/{problem_id}', [
    'uses' => 'ProblemController@getReviewRequestProblem',
    'as' => 'get_review_request_problem'
  ]);

  Route::get('/problem/cancel/{problem_id}', [
    'uses' => 'ProblemController@getCancelProblem',
    'as' => 'get_cancel_problem'
  ]);

  Route::get('/problems/laststates', [
    'uses' => 'ProblemController@getProblemsLastState',
    'as' => 'get_problems_last_states'
  ]);


  Route::get('/game/status', [
    'uses' => "HomeController@getLastGameStatus",
  ]);

  Route::get('/admin', [
    'uses'  => 'AdminController@getAdminHome',
    'as' => 'get_admin_home'
  ]);

  Route::get('/team/ranking', [
    'uses' => 'AdminController@getTeamRanking',
    'as' => 'get_team_ranking'
  ]);

  Route::get('/stop/game/{game_stage}', [
    'uses' => "AdminController@getStopGame",
    'as' => 'get_stop_game'
  ]);

  Route::get('/start/game/{game_stage}', [
    'uses' => "AdminController@getStartGame",
    'as' => 'get_start_game'
  ]);

  Route::get('/answer/{team_id}/{problem_id}/{problem_answer}', [
    'uses' => "AdminController@getAnswerProblem",

  ]);

});
