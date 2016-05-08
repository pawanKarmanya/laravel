<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('submit', 'homeController@shout');

Route::get('/Counter', array(
    'as' => 'Counter',
    'uses' => 'counterController@home'
));
Route::get('templateEngine', 'templateController@engine');

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
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
Route::get("deletealbum/{name}", array(
    'as' => 'deletealbum',
    'uses' => 'imageController@deletealbum'
));
//
Route::get("imagedelete/{name}", array(
    'as' => 'imagedelete',
    'uses' => 'imageController@imagedelete'
));
//Route::get('imagedelete','imageController@imagedelete');

Route::get("editalbum/{name}", array(
    'as' => 'editalbum',
    'uses' => 'imageController@editalbum'
));
Route::post("imageupload/editalbum", array(
    'as' => "editalbumname",
    'uses' => "imageController@editalbumname"));

//  for spellchecker
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------

Route::get("spellchecker", array(
    "as" => "spellchecker",
    "uses" => "counterController@spellchecker"));
Route::post("checkspelling", "counterController@checkspelling");

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
// example

Route::get('example/{user}', array(
    'as' => 'example',
    "uses" => 'counterController@example'
));
Route::post('articlevalues', 'counterController@values');

Route::get('temp', array(
    'as' => 'temp',
    'uses' => 'counterController@temp'
));
Route::post('temperature', 'counterController@temperature');
Route::get('guestbook', array(
    'as' => 'guestbook',
    'uses' => 'counterController@guest'
));
Route::post('guestbooksubmit', array(
    'as' => 'guestbooksubmit',
    'uses' => 'counterController@guestsubmit'));
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//shout box start

Route::get('/shoutbox', array(
    'as' => 'shoutbox',
    'uses' => 'counterController@shout'
));

Route::post('shoutboxsubmit', array(
    'as' => 'shoutboxsubmit',
    'uses' => 'counterController@shoutboxsubmit'));
//shout box end
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
// translate pages

Route::get('translate/{language}', array(
    "as" => 'translate',
    'uses' => 'translateController@translate'
));

Route::get('translatepage', array(
    "as" => 'translatepage',
    'uses' => 'translateController@main'
));
Route::any('menu/{language}', array(
    'as' => 'menu',
    'uses' => 'translateController@menu'));

// end translate pages
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//Multiple file upload

Route::get('multiplefile', array(
    'as' => 'multiplefile',
    'uses' => 'homeController@multiple'
));
Route::post('multiplefile', array(
    'as' => 'multiplefilesubmit',
    'uses' => 'homeController@filesubmit'));

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//find and replace text
Route::get('replacetext', array(
    'as' => 'replacetext',
    'uses' => 'homeController@replaceview'
));
Route::post('Findreplacepost', array(
    'as' => 'Findreplacepost',
    'uses' => 'homeController@replace'
));
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//photo album
Route::get('photoalbum', array(
    'as' => 'photoalbum',
    'uses' => 'photoalbumController@index'
));
Route::get('folder/{folder}', array(
    'as' => 'folder',
    'uses' => 'photoalbumController@folder'));
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//currency converter

Route::get('currencyconverter', 'localController@index');
Route::post('currencypost', array(
    'as' => 'currencypost',
    'uses' => 'localController@convertor'
));

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//chat window

Route::get('chatwindow/{name}', array(
    'as' => 'chatwindow',
    'uses' => 'chatController@chat'
));
Route::post('/chatsubmit', 'chatController@chatsubmit');

Route::post('/getchat', 'chatController@getchat');

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//Auto Suggest

Route::get('autosuggest', array(
    'as' => 'autosuggest',
    'uses' => 'chatController@auto'
));

Route::post('/autosuggestget', 'chatController@autosuggest');

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//search engine

Route::get('searchengine', array(
    'as' => 'searchengine',
    'uses' => 'localController@search'
));
Route::post('searchengine/result', array(
    'as' => 'searchenginesubmit',
    'uses' => 'localController@searchengine'
));

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//Mailing list
Route::get('mailinglist', array(
    'as' => 'mailinglist',
    'uses' => 'localController@mailinglist'
));
Route::post('mailinglist/maillistsubmit', array(
    'as' => 'mailinglist/maillistsubmit',
    'uses' => 'localController@maillistsubmit'));

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//Like button

Route::get('likebutton/{name}', array(
    'as' => 'likebutton',
    'uses' => 'likebuttonController@likebutton'
));
Route::post('like', 'likebuttonController@like');

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//mini shopping cart

Route::get('minishoppingcart', array(
    'as' => 'minishoppingcart',
    'uses' => 'likebuttonController@shoppingcart'
));
Route::post('addtocart', array(
    'as' => 'addtocart',
    'uses' => 'likebuttonController@addcart'
));
Route::post('checkcart', 'likebuttonController@checkcart');
Route::post('checkout', array(
    'as' => 'checkout',
    'uses' => 'likebuttonController@checkout'
));
Route::get('incrementproduct/{id}', array(
    'as' => 'incrementproduct',
    'uses' => 'likebuttonController@addproduct'
));

Route::get('decrementproduct/{id}', array(
    'as' => 'decrementproduct',
    'uses' => 'likebuttonController@deductproduct'
));
Route::get('deleteproduct/{id}', array(
    'as' => 'deleteproduct',
    'uses' => 'likebuttonController@deleteproduct'
));
Route::post('payment', array(
    'as' => 'payment',
    'uses' => 'likebuttonController@payment'
));
Route::post('paid', array(
    'as' => 'paid',
    'uses' => 'likebuttonController@paid'
));

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//Like Button

Route::get('LikeButton', array(
    'as' => 'LikeButton',
    'uses' => 'LikeController@index'));
Route::post('like_add', 'LikeController@like_add');
Route::post('like_get', 'LikeController@like_get');

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------

//Url shortner
Route::get('UrlShorten','UrlController@index');
Route::post('shorten','UrlController@shorten');

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//CSRF Controller

Route::get("/Csrf",'CsrfController@index');
Route::post('Csrf', array(
   "as" => 'csrf',
   'uses' => 'CsrfController@csrf'
));
Route::get('csrfprocess/{message}',array(
    'as'=>'csrfprocess',
    'uses'=>'CsrfController@indexsecond'
));

//WEbsite Rating
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------

Route::get('/WebsiteRating', array(
    'as'=>'websiteindex',
    'uses'=> 'WebsiteRateController@index'
   ));
Route::get('/WebsiteRating/{item}/{rating}/{limit}', array(
		'as' => 'rating',
		'uses' => 'WebsiteRateController@rating'
	));
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------

Route::get('/XmlFeed', 'XmlfeedController@index');

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------

//Template engine controller

Route::get('templateengine', 'TemplateengineController@home');

//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//Web Site UporDown------------------------------------------------------------------------

Route::get('websiteupordown', 'counterController@websiteupordown');
Route::post('websiteupordown', array(
    'as' => 'upordown',
    'uses' => 'counterController@upordown'
));
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------




