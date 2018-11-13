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
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@index' );

//Route::get('/varagh/{id}', 'PagesController@varagh','$id' );


Route::get('/product/{id_group}' , function ($id_group) {
    return 'this is  '  .$id_group;
});