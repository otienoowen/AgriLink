<?php

use Illuminate\Support\Facades\Route;

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



/* Route::get('/hello', function () {
     return '<h1>Hello world</>';
});
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
*/

//ADMIN USER CRUD
Route::get('admin', 'AdminController@index');
Route::get('add-user', 'AdminController@create');
Route::post('add-user', 'AdminController@store');
Route::get('edit-user/{id}', 'AdminController@edit');
Route::put('update-user/{id}', 'AdminController@update');
//Route::get('delete-user/{id}', 'AdminController@destroy');
Route::delete('delete-user/{id}', 'AdminController@destroy');


//ADMIN PRODUCT CRUD
Route::get('admin-products', 'AdminController@products_index');
Route::get('add-product', 'AdminController@products_create');
Route::post('add-product', 'AdminController@products_store');
Route::get('edit-product/{id}', 'AdminController@products_edit');
Route::put('update-product/{id}', 'AdminController@products_update');
Route::delete('delete-product/{id}', 'AdminController@products_destroy');


//FARMER CRUD
Route::get('products', 'ProductsController@index');
Route::get('farmer-add', 'ProductsController@products_create');





Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


Route::resource('posts', 'PostsController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('role:farmer');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('role:market');

//Route::get('/admin_dashboard', 'Admin\DashboardController@index')->middleware('role:admin');
//Route::get('/seller_dashboard', 'Seller\DashboardController@index')->middleware('role:seller');

