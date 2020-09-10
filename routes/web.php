<?php

use Illuminate\Support\Facades\Route;

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
Route::group([
    'middleware' => 'language'
], function (){
    Route::resource('tasks', 'TaskController');
    Route::resource('posts', 'PostController');
});

Route::get('language/{language}', 'HomeController@changeLanguage')->name('language');
