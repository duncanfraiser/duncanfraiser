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

Route::get('/', 'LandingController@index');
Route::resource('/landing', 'LandingController');

Route::resource('/contact', 'ContactController');
Route::get('/contact/{id}/thanks', 'ContactController@thanks');
Route::resource('/test', 'TestController');



Route::resource('/project', 'ProjectController');
Route::resource('/section', 'SectionController');

Route::resource('/resume', 'ResumeController');
Route::resource('/job', 'JobController');
Route::resource('/education', 'EducationController');
Route::resource('/tool', 'ToolController');
Route::resource('/community', 'CommunityController');


Auth::routes();

Route::get('/home', 'HomeController@index');
