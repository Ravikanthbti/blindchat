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

//Route::get('admin','AdminController@index');

Route::get('/','FrondEndController@index');
Route::post('constant-post','FrondEndController@storeContact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//*****************************  Admin Auth   ***********************************************


Route::get('admin-dashboard',['as'=>'admin-dashboard','uses'=>'AdminController@index']);
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login')->name('admin.login.post');
Route::get('admin/register','Admin\RegisterController@registerForm')->name('admin.register');
Route::post('admin/register','Admin\RegisterController@create');
Route::get('admin/logout', 'Admin\LoginController@logout');
Route::post('admin-password/email','ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

//Reset Password

Route::get('admin-password/reset{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');