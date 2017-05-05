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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'LandingController');
Route::resource('/resume', 'ResumeController');
Route::resource('/contact', 'ContactController');
Route::get('/contact/{id}/thanks', 'ContactController@thanks');
Route::resource('/work', 'WorkController');
Route::resource('/test', 'TestController');
Route::resource('/project', 'ProjectController');




Auth::routes();

Route::get('/home', 'HomeController@index');
