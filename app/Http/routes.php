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

Route::get('/', function () {
     return view('welcome');
});
Route::get('shoutbox','homeController@main');

Route::post('submit','homeController@shout');
Route::get('/Counter',array(
    'as'=>'Counter',
    'uses'=>'counterController@home'
));
Route::get('templateEngine','templateController@engine');
Route::get('imageupload','imageController@home');
//Route::get('register','imageController@register');
Route::get('imageupload/register',array(
    'as'=>'register',
    'uses'=>'imageController@register'
));
Route::get('imageupload/home',array(
    'as'=>'homeimage',
    'uses'=>'imageController@home'
));
Route::post('imageupload/login',array(
    'as'=>'loginUser',
    'uses'=>'imageController@login'
));
Route::post('imageupload/registration',array(
    'as'=>'registersubmit',
    'uses'=>'imageController@registersubmit'
));
Route::get('translate',array(
    "as"=>'translate',
    'uses'=>'translateController@translate'
));