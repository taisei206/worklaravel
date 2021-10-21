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
