<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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

Route::get('/envato-user-helper-demo', function () {
    return EnvatoUser::get_username(2);
});

Route::get('/users', 'UserController@index');
Route::get('/users/report/{view_type}', 'UserController@report');


Route::get('qrcode-with-special-data', function() {
     return \QrCode::size(500)
                 ->email('wpibousarr@gmail.com', 'Welcome to Tutsmake!', 'This is !.');
 });

Route::get('qrcode', function () {
     return QrCode::size(300)->generate('A basic example of QR code!');
 });

Route::get('/eleves', 'ElevesController@index');
Route::get('/eleves/create', 'ElevesController@create');
Route::get('/eleves/{id}', 'ElevesController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dynamic_dependent', 'DynamicDependent@index');

Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');
