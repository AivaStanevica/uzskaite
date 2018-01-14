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

Route::get('/', 'TaskController@index');
Route::get('/profile', function () {
    if (Auth::check()){
    return view('profiles.profile');}
    else return view('welcome');
});
Route::get('/tasks', 'TaskController@index');

Route::post('/tasks','TaskController@store');

Route::get('/admins', function () {
    if (Auth::user()->hasrole('Admins')){
    return view('delete.admin');}
    else return view('welcome');
});
Route::get('/valde', function () {
    return view('delete.valde');
});
Route::get('/biedrs', function () {
    return view('delete.biedrs');
});

Auth::routes();

Route::get('/tasks/create', 'TaskController@create');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'TaskController@index');
Route::get('admin_area', ['middleware' => 'admin', function () {
    //

}]);
