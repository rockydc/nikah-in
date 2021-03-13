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
// Route::get('/',function(){
//     return view('pages.maintenancepage');
// });
// Route::get('/',function(){
//     return view('pages.maintenancepage');
// });
Route::get('/getdatadesain','HomeController@getdata');
// Route::get('/maintenance',function(){
//     return view('pages.maintenancepage');
// })
// ->name('maintenance');


Route::prefix("desain")
    ->namespace('desain')
    ->group(function(){
        Route::get('/','DesainController@index')->name('desainUser');
        Route::get('/getdata','DesainController@getdata')->name('desainGet');
        
        Route::get('/preview/{nama}/view/{views}','DesainController@preview')->name('previewdesain');
        Route::get('/template/{nama}','DesainController@template');
    
    });



// Admin/*
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/','DashboardadminController@index')
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

        Route::get('data-rsvp/cetakpdf','AnesController@cetakpdf')->name('anescetak');
        Route::prefix('admin')
        ->middleware(['auth'])
        ->group(function(){
            Route::get('/','AnesController@dashboard')
            ->name('anesdashboard');
            Route::get('/getrsvp','AnesController@getrsvp');
            Route::get('/rsvp','AnesController@rsvp')->name('anesrsvp');
            // Route::get('guestbook','AnesController@guestbook')->name('anesguestbook');
        });


    });

    
Route::prefix('Hesti_Isby')
->namespace('isby')
->group(function(){
    Route::get('/','IsbyController@index')->name('isby');
    Route::get('/success','IsbyController@success')->name('isby-success');
    Route::post('/store','IsbyController@store')->name('isbystore');
   
    Route::prefix('admin')
    ->middleware(['auth','isby'])
    ->group(function(){
        Route::get('/','IsbyController@dashboard')->name('isbydashboard');
        Route::get('/rsvp','IsbyController@rsvp')->name('isbyrsvp');
        Route::get('/getrsvp','IsbyController@getrsvp');
        
    });
});




Auth::routes();


