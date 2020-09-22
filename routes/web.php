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

Route::get('/admin', 'Auth\LoginController@login')->name('login');

Route::prefix('admin')->middleware(['RoleBuzz', 'auth'])->group(function () {
    Route::get('/admin', 'Admin\DashboardController@index')->name('admin_dashboard');
    Route::get('/admin/login', 'Auth\LoginController@login')->name('login');
    Route::get('/admin/logout', 'Auth\LoginController@logout')->name('logout');
});

// Route::prefix('seller')->middleware(['RoleBuzz', 'auth'])->group(function () {
    Route::get('/seller', 'Seller\DashboardController@index')->name('seller_dashboard');
    Route::get('/seller/create', 'Seller\PropertyController@create')->name('property_create');
    Route::post('/seller/store', 'Seller\PropertyController@store')->name('property_store');
    // Route::get('/seller/login', 'Auth\LoginController@login')->name('login');
    // Route::get('/seller/logout', 'Auth\LoginController@logout')->name('logout');
// });

// Route::get('/{any}', function () {
//   return view('client.home.index');
// })->where('any', '.*');
Route::get('/', 'HomeController@index');
