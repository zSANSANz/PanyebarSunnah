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

Route::get('/lemot', function () {
    echo "kenapa kok lemot";
});

Route::get('/home', function () {
    echo "disini omah";
});

Route::get('/sama', function () {
    return "sama saja sami mawon omah";
});

Route::get('/pohong', function () {
   return view('telo');
});

//pakai kontroller
Route::get('/terong', 'CapungController@index');

//memanggil controller 
//capung dengan fungsi pujangga
Route::get('/brokoli', 'CapungController@pujangga');


Route::get('/brokoli/dewa', 'CapungController@siti');



