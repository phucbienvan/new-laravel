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

Route::get('/insert', function (){
    DB::insert('INSERT INTO posts(title, body, is_admin) VALUES (?, ?, ?)', ['bienvanphuc',
        'nguyenphuongthao', 1]);
});

Route::get('/read', function (){
   $result = DB::select("SELECT * FROM posts");
   return $result;
});
