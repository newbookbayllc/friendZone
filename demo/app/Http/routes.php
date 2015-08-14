<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//initiate
Route::get('friendZone/{id}','friendZone\friendController@initiateFriendZone');

//friends page
//Route::get('friendZone/{id}','friendZone\friendController@clickFriendZone');
Route::post('friendZone/clickUser','friendZone\friendController@showUserInfo');

//personal page // i go to the bathroom for a while 
//Route::get('friendZone/personalPage','friendZone\friendController@showUserInfo');
Route::post('friendZone/saveEdit','friendZone\friendController@saveEdit');

Route::get('/', 'WelcomeController@index');
Route::get('test1',function(){return 'User ';});
Route::get('conversation','friendZone\testController@conversation');
Route::get('friends','friendZone\testController@friends');
Route::get('giftpage','friendZone\testController@giftpage');
Route::get('gifttab1','friendZone\testController@gifttab1');
Route::get('gifttab2','friendZone\testController@gifttab2');
Route::get('gifttab3','friendZone\testController@gifttab3');