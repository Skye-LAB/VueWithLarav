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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('create', 'HomeController@store')->name('create');

Route::get('/', 'HomeController@index');
Route::get('/admin', 'HomeController@admin');
// Route::group(['middleware' => 'auth'], function () {
    Route::resource('/admin/menu', 'MenuController');
    // Route::resource('/admin/employee', 'EmployeeController');
// });
Route::post('login', 'HomeController@auth')->name('login');
