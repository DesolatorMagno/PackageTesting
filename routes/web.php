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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test', function () {
    return view('laravel-msg::message');
});

route::get('/success/{msg?}/{title?}', 'MsgController@success')->name('alert.success');

route::get('/message/create', 'MsgController@create')->name('msg.create');
route::post('/message', 'MsgController@post')->name('msg.post');

route::get('/table-cancel', 'TableCancelController@index')->name('table.cancel.index');
route::delete('/table-cancel/{id}', 'TableCancelController@destroy')->name('table.cancel.destroy');
