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


Route::post('submit', 'homeController@shout');
Route::get('/Counter', array(
    'as' => 'Counter',
    'uses' => 'counterController@home'
));
Route::get('templateEngine', 'templateController@engine');

//Image upload website

Route::get('imageupload', 'imageController@home');

Route::get('imageupload/register', array(
    'as' => 'register',
    'uses' => 'imageController@register'
));
Route::get('imageupload/home', array(
    'as' => 'homeimage',
    'uses' => 'imageController@home'
));
Route::any('imageupload/login', array(
    'as' => 'loginUser',
    'uses' => 'imageController@login'
));

Route::post('imageupload/registration', array(
    'as' => 'registersubmit',
    'uses' => 'imageController@registersubmit'
));
Route::get('translate', array(
    "as" => 'translate',
    'uses' => 'translateController@translate'
));
Route::get("hai", 'imageController@hai');

Route::get("imageupload/showalbums", array(
    'as' => 'albums',
    'uses' => "imageController@albums"
));
Route::get("imageupload/createalbums", array(
    'as' => 'createalbum',
    'uses' => "imageController@createalbum"
));
Route::get("imageupload/uploadimage", array(
    'as' => 'imageupload',
    'uses' => "imageController@imageuploadview"
));
Route::post('imageupload/createalbum', array(
    'as' => 'createalbumsubmit',
    'uses' => 'imageController@createalbumsubmit'
));
Route::post('imageupload/imagesave', array(
    'as' => 'imageuploadsubmit',
    'uses' => 'imageController@imageupload'
));
Route::get('viewalbum/{name}',
        array(
            'as'=>'viewalbum',
            'uses'=>"imageController@viewalbum"));