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
Route::post('/language', array(
    'Middleware'=>'LanguageSwitch',
    'uses'=>'LanguageController@index'
));
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/{profile}', 'ProfileController@index');
Route::post('/profile','ProfileController@updateAvatar');
Route::get('/tasks', 'TaskController@index');
Route::post('/tasks','TaskController@store');
Route::get('/tasks/{task}', 'TaskController@show');
Route::get('/tasks/create', 'TaskController@create');

Route::post('/tasks/{task}/comments','CommentController@store');
Route::post('/tasks/{task}/comments','CommentController@store');
Route::resource('tasks','TaskController');

Auth::routes();

Route::get('/admins', function(){
    return view('profiles.admins');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'TaskController@index');

Route::get('admin_area', ['middleware' => 'admin', function () {
    //
}]);

