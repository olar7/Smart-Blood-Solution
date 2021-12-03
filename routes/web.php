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
    return redirect('index');
});
route::view('index',"index");

// route::view('admin',"adminDash");

route::view('addUsers',"addUsers");
route::view('admailbox',"mailbox");
route::view('donorreq',"donorreq");
route::view('bedonor',"bedonor");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    route::view('',"adminDash");
    Route::resource('user_type', App\Http\Controllers\UserTypeController::class);
    Route::resource('permission', App\Http\Controllers\PermissionController::class);
    Route::resource('component', App\Http\Controllers\ComponentController::class);
    Route::resource('admin', App\Http\Controllers\AdminController::class);

});