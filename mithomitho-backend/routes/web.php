<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/admin', function () {
    return view('admin.hello');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['role:admin']],function(){
    Route::resource('dashboard', AdminUserController::class)->names('adminDashboard');

});
Route::group(['prefix'=>'customeradmin','middleware'=>['role:customer']],function(){
    Route::resource('dashboard', 'App\Http\Controllers\HomeController')->names('customerDashboard');
});
Route::group(['prefix'=>'user/','middleware'=>['role:user']],function(){
    // Route::get();
    Route::resource('dashboard', 'App\Http\Controllers\UserController')->names('userDashboard');
});
