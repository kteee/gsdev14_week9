<?php

// ダッシュボード
Route::get('/', 'IndexController@index');


/*************************/
/*DEALS*******************/
/*************************/

// 取引一覧
Route::get('/deals', 'DealsController@index')->middleware('auth','verified');

// 取引登録
Route::post('deals/new', 'DealsController@new')->middleware('auth','verified');

// 取引表示
Route::get('deals/{id}', 'DealsController@show')->middleware('auth','verified');

// 取引編集
Route::put('deals/{id}/edit', 'DealsController@edit')->middleware('auth','verified');

// 取引編集
Route::delete('deals/{id}/delete', 'DealsController@delete')->middleware('auth','verified');

/*************************/
/*ITEMS*******************/
/*************************/

// 一覧画面
Route::get('/items','ItemsController@index')->middleware('auth','verified');

// 登録画面
Route::get('/items/new','ItemsController@new')->middleware('auth','verified');

// 登録画面
Route::post('/items/new','ItemsController@create')->middleware('auth','verified');

/*************************/
/* USERS *****************/
/*************************/

Route::get('/users', 'UserController@index')->middleware('auth','verified');

Route::get('/users/{id}/delete', 'UserController@deleteConf')->middleware('auth','verified');
Route::delete('/users/{id}/delete', 'UserController@delete')->middleware('auth','verified');


/*************************/
/*AUTH *******************/
/*************************/

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


/*************************/
/*MAIL *******************/
/*************************/

Route::get('sample/mailable/preview',function(){
  return new App\Mail\SampleNotification();
});

Route::get('sample/mailable/send','SampleController@SampleNotification');