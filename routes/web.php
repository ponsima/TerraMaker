<?php

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


//トップページ
Route::get('/' , 'IndexController@home')->name('home');

//ナビゲーションリスト
//アバウト
Route::get('/about/', 'IndexController@about')->name('about');

//使い方


//作成
Route::get('/create/', 'CreateController@create')->name('create');

//プリセット
Route::post('/create/preset/', 'CreateController@preset')->name('preset');

//詳細設定
Route::post('/create/preset/setting/','CreateController@setting')->name('setting');

//ダウンロード
Route::post('/create/preset/setting/download/', 'DownloadController@download')->name('download');


Route::get('/create/preset/setting/download/finish', 'CreateController@finish')->name('finish');

Route::post('/create/preset/setting/download/test', 'DownloadController@test')->name('test');



Route::get('/test/',function () {
    return view('test');
});
