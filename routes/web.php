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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::POST('/controller',[
    'uses' => 'theadminController@SignUp',
    'as' => 'SignUp',
]);
Route::POST('/edunet account',[
    'uses' => 'maincontroller@MSignUp',
    'as' => 'MSignUp',
]);
Route::POST('/edunet Staff',[
    'uses' => 'maincontroller@tSignin',
    'as' => 'tSignin',
]);

Route::GET('/edunet account',[
    'uses' => 'maincontroller@macc',
    'as' => 'macc',
]);


Route::GET('/edunet school',[
    'uses' => 'schoolcontroller@inde',
    'as' => 'inde',
]);

Route::POST('/edunet school',[
    'uses' => 'schoolcontroller@school',
    'as' => 'school',
]);
