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

/*
 * ROUTE GROUP
 * for Development
 *
 */
Route::group(['prefix' => 'noDB'], function() {
Route::get('mypage', function () {
	$meditators = [
		['name' => 'さぬき太郎',
		'depart' => '製麺部うどん課', 
		'address' => 'test@kagawa.pref.jp'],
		['name' => '阿波三芳',
		'depart' => '生鮮食品部玉ねぎ課', 
		'address' => 'test@tokusima.pref.jp'],
		['name' => '松本伊予',
		'depart' => '生鮮食品部柑橘課', 
		'address' => 'test@ehime.pref.jp'],
		['name' => '高知東生',
		'depart' => '食品部清酒課', 
		'address' => 'test@kochi.pref.jp'],
		['name' => 'さぬき太郎',
		'depart' => '製麺部うどん課', 
		'address' => 'test@kagawa.pref.jp'],
		['name' => '阿波三芳',
		'depart' => '生鮮食品部玉ねぎ課', 
		'address' => 'test@tokusima.pref.jp'],
		['name' => '松本伊予',
		'depart' => '生鮮食品部柑橘課', 
		'address' => 'test@ehime.pref.jp'],
		['name' => '高知東生',
		'depart' => '食品部清酒課', 
		'address' => 'test@kochi.pref.jp'],
		['name' => '松本伊予',
		'depart' => '生鮮食品部柑橘課', 
		'address' => 'test@ehime.pref.jp'],
		['name' => '高知東生',
		'depart' => '食品部清酒課', 
		'address' => 'test@kochi.pref.jp']
		];
	$targets = [
		[ 'name' => '松尾道明',
		'company' => '株式会社A',
		'medi_name' => '中山　優',
		'medi_depart' => '営業部　営業課']
	];

    return view('myPageList',compact('meditators','targets'));
});
Route::get('addMeditator', function () {
    return view('addMeditator');
});
});

/*
 * ROUTE GROUP
 * for Controller Development
 *
 */
Route::group(['prefix' => 'cnt'], function() {
Route::get('mypage', [App\Http\Controllers\HomeController::class, 'mypage'])->name('mypage');
});

/*
 * ROUTE GROUP
 * for LOGIN Requied
 *
 */
Route::group(['middleware' => 'auth'], function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'mypage'])->name('mypage');
//Route::get('/showMailTxt', [App\Http\Controllers\HomeController::class, 'showMailTxt'])->name('showMailTxt');
//Route::get('/addMediator', [App\Http\Controllers\HomeController::class, 'addMediator'])->name('addMediator');
});
