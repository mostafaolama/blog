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
//test for bootstrap
Route::get('/bootstrap', function(){
    return view('bootstrap');
});

//routing book request
Route::get('/booklist', 'bookController@index');
Route::get('/booklist/{id}', 'bookController@show');


//routing phone product request
Route::get('products', 'phoneController@index');
Route::get('/products/creat', 'phoneContoller@creat');
Route::get('/products/{id}',  'phoneController@show');


Route::get('/users', function (){
    $users = DB::table('users')->select('name')->get();

});
