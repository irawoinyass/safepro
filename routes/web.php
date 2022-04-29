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

Route::get('/test', function () {
    return view('welcome');
});


Route::get('/', 'MainController@index')->name('main.home');
Route::get('/home', 'MainController@index')->name('main.home');
Route::get('/aboutus', 'MainController@aboutus')->name('main.aboutus');
Route::get('/contactus', 'MainController@contactus')->name('main.contactus');
Route::post('/contact', 'MainController@contact')->name('main.contact');

    //Services//
Route::get('/Information security and assurance', 'MainController@assurance')->name('main.assurance');
Route::get('/Technology advisory and consulting', 'MainController@consulting')->name('main.consulting'); 
Route::get('/Products and solution design', 'MainController@design')->name('main.design'); 
Route::get('/Networking and cloud support', 'MainController@support')->name('main.support');
Route::get('/careers', 'MainController@careers')->name('main.careers');    