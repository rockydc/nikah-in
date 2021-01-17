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
    return view('pages.homepage');
    // return redirect()->route('anes');
});


// Admin/*
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/','DashboardController@index')
        ->name('dashboard');

        Route::resource('rsvp','rsvp_onlineController');
        Route::resource('guestbook','guestbookController');



        
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
        Route::post('/gueststore','AnesController@gueststore')
        ->name('gueststore');
        Route::prefix('admin')
        ->middleware(['auth','admin'])
        ->group(function(){
            Route::get('/','AnesController@dashboard')
            ->name('anesdashboard');
    
            Route::get('rsvp','AnesController@rsvp');
            Route::get('guestbook','AnesController@guestbook');
        });


    });




Auth::routes();


