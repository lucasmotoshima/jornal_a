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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    //Route::namespace('admin')->group(function () {
        // Controllers Within The "App\Http\Controllers\Admin" Namespace
        //Route::group(['middleware' => 'admin.user'], function () {
            Route::get('/', function () {
                // Matches The "/admin/room" URL
                return "Test";
            });
        //});
    //});
});
