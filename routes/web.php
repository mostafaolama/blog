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
Route::get('/creat', 'bookController@creat');
Route::post('/save', 'bookController@save');
//routing phone product request
Route::get('products', 'phoneController@index');
Route::get('/products/creat', 'phoneController@creat');
Route::post("/products",      "phoneController@save");
Route::get('/products/{id}',  'phoneController@show');
Route::get("editPhonePage","phoneController@edit");
Route::post('edit', 'phoneController@makeEdit');

//Route::get('')

Route::get('/users', function (){
    $users = DB::table('users')->select('name')->get();

});
