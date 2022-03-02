<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendRequest;

Route::get('/test', function () {
    Mail::to('test@example.com')->send(new sendRequest);
    return 'メール送信しました！';
});

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
Route::get('/mediatorMyPage', [App\Http\Controllers\HomeController::class, 'mediatorMyPage'])->name('mediatorMyPage');
Route::get('/myPage', [App\Http\Controllers\HomeController::class, 'myPage'])->name('myPage');
Route::get('/addMediator', [App\Http\Controllers\HomeController::class, 'addMediator'])->name('addMediator');
Route::post('/confirmWithDraft', [App\Http\Controllers\HomeController::class, 'confirmWithDraft'])->name('confirmWithDraft');
Route::post('/editMediator', [App\Http\Controllers\HomeController::class, 'editMediator'])->name('editMediator');
Route::post('/commitMediator', [App\Http\Controllers\HomeController::class, 'commitMediator'])->name('commitMediator');
});
