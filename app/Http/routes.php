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
Route::get('viewalbum/{name}', array(
    'as' => 'viewalbum',
    'uses' => "imageController@viewalbum"));
Route::get("deletealbum/{name}",array(
    'as'=>'deletealbum',
    'uses'=>'imageController@deletealbum'
));
//
Route::get("imagedelete/{name}",array(
    'as'=> 'imagedelete',
    'uses'=>'imageController@imagedelete'
));
//Route::get('imagedelete','imageController@imagedelete');

Route::get("editalbum/{name}",array(
    'as'=> 'editalbum',
    'uses'=>'imageController@editalbum'
));
Route::post("imageupload/editalbum",array(
     'as' =>  "editalbumname",
    'uses' => "imageController@editalbumname"));

//  for spellchecker 

Route::get("spellchecker",array(
    "as"=>"spellchecker",
    "uses"=>"counterController@spellchecker"));
Route::post("checkspelling","counterController@checkspelling");


// example

Route::get('example/{user}', array(
    'as' => 'example',
    "uses"=>'counterController@example'
));
Route::get('likebutton',array(
    'as'=>'likebutton',
    'uses'=>'counterController@likebutton'
));
Route::post('articlevalues','counterController@values');

Route::get('temp',array(
    'as'=>'temp',
    'uses'=>'counterController@temp'
));
Route::post('temperature', 'counterController@temperature');
Route::get('guestbook',array(
    'as'=>'guestbook',
    'uses'=>'counterController@guest'
));