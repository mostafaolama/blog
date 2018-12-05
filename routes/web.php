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
Route::get('/products/creat', 'phoneController@creat');//page contain a form for create new phone
Route::post("/products",      "phoneController@save");//redirect after make a new phone by submit form
Route::get('/products/{id}',  'phoneController@show');

Route::get("editPhonePage","phoneController@edit");//page for edit valid phone in database
Route::post('edit', 'phoneController@makeEdit'); //after edit a product we redirect to this page

//Route::get('')

Route::get('/users', function (){
    $users = DB::table('users')->select('name')->get();

});
