<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shopkeeperregister;
use App\Http\Controllers\customerregister;

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
Route::get('/customerregister', function () {
    return view('customerregister');
});
    Route::post("customersignup",[customerregister::class,'getData']);
    //Route::view("customersignup","customerregister");



Route::get('/shopkeeperlogin', function () {
    return view('shopkeeperlogin');
});
Route::get('/Dashboard', function () {
    return view('Dashboard');
});

Route::get('/shopkeepersignup', function () {
    return view('/shopkeepersignup');
});
Route::post("shopkeepersignup",[shopkeeperregister::class,'getData']);
Route::view("signup","Shopkeepersignup");


Route::post('shopkeeperlogin',[\App\Http\Controllers\shoplogin::class,'index'])->name('shopkeeperlogin.shopkeeperlogin');
