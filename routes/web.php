<?php

Route::get('/','PostsController@index');

Route::resource('discussions','PostsController');

Route::get('/discussions/create','PostsController@create');

Route::post('/discussions/store','PostsController@store');
Route::post('/discussions/{{$discussion->id}}/edit','PostsController@update');

Route::get('/user/register','UsersController@register');
Route::get('/user/login','UsersController@login');
Route::get('/verify/{confirm_code}','UsersController@confirmEmail');
Route::post('/user/register','UsersController@store');
Route::post('/user/login','UsersController@signin');
Route::get('/logout','UsersController@logout');
Route::get('/find','PostsController@find');
Route::post('/showfind','PostsController@showfind');
Route::get('/profile','PostsController@profile');

Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'EmailController@verify']);


Route::get('captcha',function (){
    $captcha_id = "0d1943009d6b049c794237dd3c59394b";
    $private_key = "11f009ee84518e0724237e25e955e2b1";
    $captcha = new \Laravist\GeeCaptcha\GeeCaptcha($captcha_id, $private_key);
    echo $captcha->GTServerIsNormal();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
