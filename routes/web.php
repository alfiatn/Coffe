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

Route::resource('admin', 'Admin');
Route::resource('kopi', 'Kopi');
Route::resource('menu', 'Menu');
Route::resource('menuadmin', 'MenuAdmin');
Route::resource('pesan', 'Pesan');
Route::resource('pesanadmin', 'PesanAdmin');
Route::resource('contact', 'Contact');
Route::resource('contactadmin', 'ContactAdmin');

Route::get('/pesan', 'pesan@index');
Route::get('/get-pesan', 'pesan@pesan');

Route::get('/login', 'Login@login');
Route::post('/loginPost', 'Login@loginPost');
Route::get('/register', 'Login@register');
Route::post('/registerPost', 'Login@registerPost');
Route::get('/logout', 'Login@logout');

Route::get('/', function(){
    return view('index');
  
  });
