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
//add friend
Route::post('friendZone/addFriend','friendZone\friendController@addFriend');
//check request
Route::get('friendZone/conversation/showConversation','friendZone\requestController@showConversation');

//start conversation
Route::get('friendZone/startConversation/{sign},{friendId}','friendZone\requestController@startConversation');

Route::post('friendZone/conversation/sendMsg','friendZone\requestController@sendMsg');
Route::post('friendZone/receiveMsg','friendZone\requestcontroller@receiveMsg');

//personal page
//Route::post('friendzone/personalPage','friendZone\friendController@personalPage');
Route::post('friendZone/personalPage','friendZone\friendController@personalPage');
Route::post('friendZone/saveEdit','friendZone\friendController@saveEdit');

//sendGift Page
Route::post('friendZone/sendGift','friendZone\friendController@sendGift');
//check Request
Route::post('friendZone/checkRequest','friendZone\friendController@checkRequest');
Route::post('friendZone/processRequest','friendZone\friendController@processRequest');
Route::post('friendZone/sendGiftRequest','friendZone\friendController@sendGiftRequest');


Route::get('/', 'WelcomeController@index');
Route::get('test1',function(){return 'User ';});
//Route::get('conversation','friendZone\testController@conversation');
Route::get('friends','friendZone\testController@friends');
Route::get('giftpage','friendZone\testController@giftpage');
Route::get('gifttab1','friendZone\testController@gifttab1');
Route::get('gifttab2','friendZone\testController@gifttab2');
Route::get('gifttab3','friendZone\testController@gifttab3');