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
Auth::routes();

//ログイン前のルーティンググループ
Route::group(['middleware' => ['guest']], function () {
	//ログインフォーム表示
	Route::get('/', [AuthController::class, 'showLogin'])->name('login.show');
});

/*
 * 
 * ログイン後のルーティンググループ
 *
 */
Route::group(['middleware' => 'auth'], function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'myPage'])->name('myPage');
//Route::get('/Logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
//Route::get('/showMailTxt', [App\Http\Controllers\HomeController::class, 'showMailTxt'])->name('showMailTxt');
Route::get('/addMeditator', [App\Http\Controllers\HomeController::class, 'addMeditator'])->name('addMeditator');
//Route::post('/addMeditator', [App\Http\Controllers\HomeController::class, 'addMeditator'])->name('addMeditator');
});
