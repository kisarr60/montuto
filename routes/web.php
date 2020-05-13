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

Route::get('/lescandidats', 'CandidatController@index');
Route::get('/lescandidats/export', 'CandidatController@export');
Route::post('/lescandidats', 'CandidatController@import');
Route::post('/lescandidats', 'CandidatController@maj_candidats');


Route::get('pdfprofs', 'AgentController@pdfprofs');

Route::resource('classes', 'ClasseController');
Route::resource('agents', 'AgentController');
Route::post('/pdf', 'AgentController@pdf');

Route::get('/import_excel', 'ImportExcelController@index');
Route::post('/import_excel', 'ImportExcelController@import');
Route::post('/maj_excel', 'ImportExcelController@miseAjour');

Route::get('/import_excel/export', 'ImportExcelController@export');
Route::get('/export', 'EleveController@export')->name('export');
Route::post('/import', 'EleveController@export')->name('import');
Route::get('/sarr', 'RandomController@sarr');

Route::get('/envato-user-helper-demo', function () {
    return EnvatoUser::get_username(2);
});

Route::get('/users', 'UserController@index');
Route::get('/users/report/{view_type}', 'UserController@report');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');


Route::get('qrcode-with-special-data', function() {
     return \QrCode::size(500)
                 ->email('wpibousarr@gmail.com', 'Welcome to Tutsmake!', 'This is !.');
 });

Route::get('qrcode', function () {
     return QrCode::size(300)->generate('A basic example of QR code!');
 });

Route::resource('/eleve', 'EleveController');
Route::get('eleves/voir', 'EleveController@voir');
Route::get('candidats', 'EleveController@pdfeleves');
Route::post('eleves/certif', 'ElevesController@certif');
Route::post('eleves/billetsortie', 'ElevesController@billetsortie');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dynamic_dependent', 'DynamicDependent@index');

Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
