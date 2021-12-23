<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

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
//     return redirect('index');
// });
// route::view('index',"index");


Route::get('/', [App\Http\Controllers\Landing::class, 'index'])->name('index');
Route::get('donorreq', [App\Http\Controllers\RequestBloodController::class, 'index'])->name('donorreq.index');
Route::post('donorreq', [App\Http\Controllers\RequestBloodController::class, 'store'])->name('donorreq.store');
Route::get('bedonor', [App\Http\Controllers\DonateBloodController::class, 'index'])->name('bedonor.index');
Route::post('bedonor', [App\Http\Controllers\DonateBloodController::class, 'store'])->name('bedonor.store');
Route::get('donorlist', [App\Http\Controllers\donor::class, 'index'])->name('donorlist');
Route::get('campaigndetails', [App\Http\Controllers\CampaignDetailController::class, 'index'])->name('campaigndetails');

route::view('admin',"adminDash");

route::view('addUsers',"addUsers");
route::view('admailbox',"mailbox");
route::view('profile',"userprofile");
// route::view('campaigndetails',"campaigndetails");
route::view('orgprofile',"organization/profile");

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    route::view('',"adminDash");
    Route::resource('user_type', App\Http\Controllers\UserTypeController::class);
    Route::resource('permission', App\Http\Controllers\PermissionController::class);
    Route::resource('component', App\Http\Controllers\ComponentController::class);
    Route::resource('admin', App\Http\Controllers\AdminController::class);
    route::resource('organization',App\Http\Controllers\OrganizationController::class);
    route::resource('blog',App\Http\Controllers\BlogController::class);
    route::resource('campaign',App\Http\Controllers\CampaignController::class);
    route::resource('bloodstock',App\Http\Controllers\BloodStockController::class);
    route::resource('clientlist',App\Http\Controllers\ClientController::class);
    route::resource('question',App\Http\Controllers\QuestionController::class);
    route::resource('blood',App\Http\Controllers\BloodController::class);
    route::resource('detail',App\Http\Controllers\DetailController::class);
    
   

});
Route::group(['prefix' => 'org', 'middleware' => 'auth'], function () {
    route::resource('bloodstock',App\Http\Controllers\BloodStockController::class);
});

    Route::group(['prefix' => 'client', 'middleware' => 'auth'], function () {
});
// mail route
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Hello',
        'body' => 'Mero ta bhayo mail'
    ];
    
   
    \Mail::to('ashwinkhadka911@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});