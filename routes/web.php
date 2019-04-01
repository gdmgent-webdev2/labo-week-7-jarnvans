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




// dynamic routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('pages.')->group(function () {
    Route::get('/', 'PagesController@getIndex')->name('home');
    Route::get('/logout', 'PagesController@logOut')->name('logout');
});


Route::name('clients.')->group(function () {
    Route::get('/klanten', 'ClientController@getIndex')->name('index');
    Route::get('/klanten/nieuw', 'ClientController@getCreate')->name('new');
    Route::get('/klanten/bewerk/{clientId}', 'ClientController@getEdit')->name('edit');
    Route::post('/klanten/bewaar', 'ClientController@postSave')->name('save');
});

Route::name('reservations.')->group(function () {
    Route::get('/reservaties', 'ReservationsController@getIndex')->name('index');
    Route::get('/reservaties/nieuw/{clientId}', 'ReservationsController@getCreate')->name('new');
    Route::get('/reservaties/bewerk/{reservationId}', 'ReservationsController@getEdit')->name('edit');
    // Route::post('/reservaties/bewaar', 'ReservationsController@postSave')->name('save');
});


// static routes
// Route::get('/', function () {return view('pages.home');})->name('home');

// Route::get('/klanten', function () {return view('clients.index');})->name('clients');
// Route::get('/klanten/nieuw', function () {return view('clients.edit');})->name('clients.create');
// Route::get('/klanten/bewerk/{client_id}', function ($client_id) {return view('clients.edit', ['client_id' => $client_id]);})->name('clients.edit');


// Route::get('/reservaties', function () {return view('reservations.index');})->name('reservations');
// Route::get('/reservaties/nieuw/{client_id}', function ($client_id) {return view('reservations.edit', ['client_id' => $client_id]);})->name('reservations.create');
// Route::get('/reservaties/bewerk/{reservation_id}', function ($reservation_id) {return view('reservations.edit', ['id' => $reservation_id]);})->name('reservations.edit');
