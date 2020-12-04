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
    // return view('welcome');
    return redirect()->route('anes');
});


// Admin/*
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/','DashboardController@index')
        ->name('dashboard');

        Route::resource('rsvp','rsvp_onlineController');
    });

// Anes/*
Route::prefix('anes-nahomi')
    ->namespace('Anes')
    ->group(function(){
        Route::get('/','AnesController@index')
        ->name('anes');
        Route::post('/store','AnesController@store')
        ->name('anesStore');
        Route::get('/guestbook','AnesController@guest')
        ->name('anesguest');
    });


Auth::routes();


