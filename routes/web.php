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


Route::get('/', 'FEndController@index')->name('home')->middleware('guest');
Route::get('/admin', 'AdminsController@homeadmin')->name('homeadmin')->middleware('auth');

Route::post('/register', 'AdminsController@postRegister')->middleware('guest');
Route::get('/register', 'AdminsController@getRegister')->name('register')->middleware('guest');

Route::post('/login', 'AdminsController@postLogin')->middleware('guest');
Route::get('/login', 'AdminsController@getLogin')->name('login')->middleware('guest');

Route::get('/logout', 'AutController@logout')->name('logout')->middleware('auth');


Route::get('forgot-password', 'AdminsController@forgotpass');
Route::get('list-product', 'ProductsController@index');
Route::get('add-product', 'ProductsController@create');
Route::get('list-product/{product}', 'ProductsController@show');
Route::post('add-product', 'ProductsController@store');
Route::delete('list-product/{product}', 'ProductsController@destroy');
Route::get('list-product/{product}/edit', 'ProductsController@edit');
Route::patch('list-product/{product}', 'ProductsController@update');

// Route::get('/', function () {
//     return view('admins/layout/main');
// });

// Route::get('/admins', 'AdminsController@products');
// Route::get('/admins/login', function(){
//     return view('/admins/login');
// });
// Route::get('/admins/product', function(){
//     return view('/admins/product');
// });

// Route::get('/admins/products', function(){
//     return view('/admins/products');
// });

// Route::get('/admins/register', function(){
//     return view('admins.register');
// });

// Route::get('/admins/forgot', function(){
//     return view('admins.forgot-password');
// });




// Route::get('/about', 'PageController@about');
// Route::get('/mahasiswa', 'MahasiswaController@index');
// // Route::get('/students', 'StudentsController@index');
// // Route::get('/students/create', 'StudentsController@create');
// // Route::get('/students/{student}', 'StudentsController@show');
// // Route::post('/students', 'StudentsController@store');
// // Route::delete('/students/{student}', 'StudentsController@destroy');
// // Route::get('/students/{student}/edit', 'StudentsController@edit');
// // Route::patch('/students/{student}', 'StudentsController@update');