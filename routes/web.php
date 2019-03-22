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
})->name('homepage');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/price_list', function () {
    return view('pages.price_list');
})->name('price_list');

Route::get('/roules', function () {
    return view('pages.roules');
})->name('roules');

Route::get('/transport_services', function () {
    return view('pages.transport_services');
})->name('transport_services');

Route::get('/truck_stock', function () {
    return view('pages.truck_stock');
})->name('truck_stock');

Route::get('/sendemail', 'SendEmailController@index')->name('email_index');

Route::post('/sendemail/send', 'SendEmailController@send')->name('email_send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

