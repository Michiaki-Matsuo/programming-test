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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/registAdmin', [App\Http\Controllers\HomeController::class, 'registAdmin'])->name('registAdmin');
 */

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
//Route::get('/', function () { return view('welcome'); });
Route::get('/', [App\Http\Controllers\HomeController::class, 'mypage'])->name('mypage');
Route::get('/showMailTxt', [App\Http\Controllers\HomeController::class, 'showMailTxt'])->name('showMailTxt');
Route::post('/addAdmin', [App\Http\Controllers\HomeController::class, 'addAdmin'])->name('addAdmin');
Route::post('/addMediator', [App\Http\Controllers\HomeController::class, 'addMediator'])->name('addMediator');
});
