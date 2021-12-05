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
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

Route::get('/','HomeController@index')->name('home');
Route::get('/getdatadesain','HomeController@getdata');
Route::get('/rsvpsucces',function(){
    return view ('layouts.user.rsvpsuccespage');
})->name('success');


Route::prefix("desain")
    ->namespace('desain')
    ->group(function(){
        Route::get('/','DesainController@index')->name('desainUser');
        Route::get('/getdata','DesainController@getdata')->name('desainGet');
        Route::get('/getporto','DesainController@getporto')->name('portoGet');
        
        Route::get('/preview/{nama}/view/{view}','DesainController@preview');
        Route::get('/template/{nama}','DesainController@template');
    
    });



// Admin/*
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/','DashboardController@index')
        ->name('dashboardhome');
        Route::resource('portofolio','PortofolioController');
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
        Route::get('data-rsvp','AnesController@rsvp')->name('datarsvp');
        Route::get('data-rsvp/cetakpdf','AnesController@cetakpdf')->name('anescetak');
        Route::prefix('admin')
        ->middleware(['auth','admin'])
        ->group(function(){
            Route::get('/','AnesController@dashboard')
            ->name('anesdashboard');
            Route::get('/getrsvp','AnesController@getrsvp');
            Route::get('/rsvp','AnesController@rsvp')->name('anesrsvp');
            Route::get('guestbook','AnesController@guestbook')->name('anesguestbook');
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

Route::prefix('Peter_Melita')
->namespace('peter')

->group(function(){
    Route::get('/','PeterController@index')->name('Peter');
    Route::get('/succes','PeterController@success')->name('peter-success');
    Route::post('/store','PeterController@store')->name('peterstore');

    Route::prefix('admin')
    ->group(function(){
        Route::get('/','PeterController@dashboard')->name('peterdashboard');
        Route::get('/rsvp','PeterController@rsvp')->name('peterrsvp');
        Route::get('/getrsvp','PeterController@getrsvp')->name('petergetrsvp');
    });
});


Route::prefix('daniela')
->namespace('daniel')
->group(function(){
    Route::get('/','DanielController@index')->name('daniel');
    Route::get('/succes','DanielController@success')->name('daniel-success');
    Route::post('/store','DanielController@store')->name('danielstore');

    Route::prefix('admin')
    ->group(function(){
        Route::get('/','DanielController@dashboard')->name('danieldashboard');
        Route::get('/rsvp','DanielController@rsvp')->name('danielrsvp');
        Route::get('/getrsvp','DanielController@getrsvp')->name('danielgetrsvp');
    });
});


Route::prefix('pipitficry')
->namespace('ficry')
->group(function(){
    Route::get('/','ficryController@index')->name('ficry');
    Route::get('/success','ficryController@success')->name('ficry-success');
    Route::post('/store','ficryController@store')->name('ficrystore');

    Route::prefix('admin')
    ->middleware(['auth','ficry'])
    ->group(function(){
        Route::get('/','FicryController@dashboard')->name('ficrydashboard');
        Route::get('/rsvp','FicryController@rsvp')->name('ficryrsvp');
        Route::get('/getrsvp','FicryController@getrsvp');
    });
});

Route::prefix('ferry-nitia')
->namespace('ferry')
->group(function(){
    Route::get('/','FerryController@index')->name('ferry');
    Route::get('/success','FerryController@success')->name('ferry-success');
    Route::post('/store','FerryController@store')->name('ferrystore');

    Route::prefix('admin')
    ->middleware(['auth','ferry'])
    ->group(function(){
        Route::get('/','FerryController@dashboard')->name('ferrydashboard');
        Route::get('/rsvp','FerryController@rsvp')->name('ferryrsvp');
        Route::get('/getrsvp','FerryController@getrsvp');
        
    });
});

Route::prefix('riowira-anisa')
->namespace('riowira')
->group(function(){
    Route::get('/','RiowiraController@index')->name('riowira');
    Route::get('/success','RiowiraController@success')->name('riowira-success');
    Route::post('/store','RiowiraController@store')->name('riowirastore');

    Route::prefix('admin')
    ->middleware(['auth','riowira'])
    ->group(function(){
        Route::get('/','RiowiraController@dashboard')->name('riowiradashboard');
        Route::get('/rsvp','RiowiraController@rsvp')->name('riowirarsvp');
        Route::get('/getrsvp','RiowiraController@getrsvp');
        
    });
});


Route::prefix('adit-ika')
->namespace('ardy')
->group(function(){
    Route::get('/home/{name?}','ArdyController@index')->name('ardy');
    Route::get('/success','ArdyController@success')->name('ardy-success');
    Route::post('/store','ArdyController@store')->name('ardystore');

    Route::prefix('admin')
    ->middleware(['auth','ardy'])
    ->group(function(){
        Route::get('/','ArdyController@dashboard')->name('ardydashboard');
        Route::get('/rsvp','ArdyController@rsvp')->name('ardyrsvp');
        Route::get('/getrsvp','ArdyController@getrsvp');
        Route::get('/cetakpdf','ArdyController@cetakpdf')->name('ardycetak');
        
    });
});


Route::prefix('adhi-gita')
->namespace('adhigita')
->group(function(){
    Route::get('/home/{name?}','AdhigitaController@index')->name('adhigita');
    Route::get('/success','AdhigitaController@success')->name('adhigita-success');
    Route::post('/store','AdhigitaController@store')->name('adhigitastore');

    Route::prefix('admin')
    ->middleware(['auth','adhigita'])
    ->group(function(){
        Route::get('/','AdhigitaController@dashboard')->name('adhigitadashboard');
        Route::get('/rsvp','AdhigitaController@rsvp')->name('adhigitarsvp');
        Route::get('/getrsvp','AdhigitaController@getrsvp');
        Route::get('/cetakpdf','AdhigitaController@cetakpdf')->name('adhigitacetak');
        
    });
});


Route::prefix('terminal')->group(function(){
    Route::get('migrate', function(){
        \Artisan::call('migrate', ['force' => true]);
    });
    Route::get('pull', function(){
        $process = new Process('git pull origin main');
        $process->start();

        foreach ($process as $type => $data) {
            if ($process::OUT === $type) {
                info($data);    //output store in log file..
                $this->info($data);  //show output in console..
                print_r($data);
                //       $this->info(print_r($data,true)) // if output is array or object then used
            } else {
                $this->warn("error :- ".$data);
            }
        }

        $this->info("get output");
    });
});
Auth::routes();


