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
});

Route::get('test/modeldump',function(){
    $message=new App\Message;
    var_dump($message);
});

Route::get('/test/modelinsert',function(){
    $message=new App\Message;
    $message->title='title_101';
    $message->body='body_101';
    $message->save();

    $id=$message->id;
    var_dump($id);
});

Route::get('test/modelreuse',function(){
    $message=new App\Message;
    $message->title='title_102';
    $message->body='body_102';
    $message->save();
//追加された主キーの取得
    $id=$message->id;
    var_dump($id,$message->body);
    //created_atとupdated_atの差分用
    sleep(3);
    //インスタンスをそのまま使い、今度は更新
    $message->title='title_102_reuse';
    $message->body='body_102_reuse';
    $message->save();
    //今度は更新なので主キーは変わらない
    $id_reuse=$message->id;
    var_dump($id_reuse,$message->body);
});

Route::resource('messages','MessagesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home','HomeController@index')->name('home');