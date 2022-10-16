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


Route::get('/comments/random', [App\Http\Controllers\GreetingControllers::class, 'comments2']);
//変数を先に書いてしまうと、CSSのように上から読み込まれてしまうためこのファイルの1番上に書く or GreetingControllers.phpにrandomを記載する。

Route::get('/comments/{greet}', [App\Http\Controllers\GreetingControllers::class, 'comments']);

Route::get('/comments/freeword/{greet}', [App\Http\Controllers\GreetingControllers::class, 'comments1']);
