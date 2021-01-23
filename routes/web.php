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

Route::get('/','HomeController@index')->name('home');
Route::get('/getdatadesain','HomeController@getdata');


Route::prefix("desain")
    ->namespace('desain')
    ->group(function(){
        Route::get('/','DesainController@index')->name('desainUser');
        Route::get('/getdata','DesainController@getdata')->name('desainGet');
        
        Route::get('/preview/{nama}','DesainController@preview')->name('previewdesain');
        Route::get('/template/{nama}','DesainController@template');
    
    });



// Admin/*
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/','DashboardController@index')
        ->name('dashboardhome');

        Route::resource('desain','DesainController');
        Route::resource('message','MessageController');
        
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


