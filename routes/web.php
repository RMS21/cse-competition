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

});
