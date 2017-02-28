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

Route::group(['middleware' => 'auth'], function(){

  Route::get('/home', [
    'uses' => 'HomeController@getHome',
    'as' => 'get_home'
  ]);

});
