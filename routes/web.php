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


Route::prefix('jauza-agus')
->namespace('jauja')
->group(function(){
    Route::get('/home/{name?}','JaujaController@index')->name('jauja');
    Route::get('/success','JaujaController@success')->name('jauja-success');
    Route::post('/store','JaujaController@store')->name('jaujastore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','JaujaController@dashboard')->name('jaujadashboard');
        Route::get('/rsvp','JaujaController@rsvp')->name('jaujarsvp');
        Route::get('/getrsvp','JaujaController@getrsvp');
        Route::get('/cetakpdf','JaujaController@cetakpdf')->name('jaujacetak');
    });
});

    Route::prefix('Andreas-Deve')
->namespace('andreasdeve')
->group(function(){
    Route::get('/home/{name?}','AndreasdeveController@index')->name('andreasdeve');
    Route::get('/success','AndreasdeveController@success')->name('andreasdeve-success');
    Route::post('/store','AndreasdeveController@store')->name('andreasdevestore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','AndreasdeveController@dashboard')->name('andreasdevedashboard');
        Route::get('/rsvp','AndreasdeveController@rsvp')->name('andreasdeversvp');
        Route::get('/getrsvp','AndreasdeveController@getrsvp');
        Route::get('/cetakpdf','AndreasdeveController@cetakpdf')->name('andreasdevecetak');
    });
});

Route::prefix('anda-cyntia')
->namespace('tia')
->group(function(){
    Route::get('/home/{name?}','TiaController@index')->name('tia');
    Route::get('/success','TiaController@success')->name('tia-success');
    Route::post('/store','TiaController@store')->name('tiastore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','TiaController@dashboard')->name('tiadashboard');
        Route::get('/rsvp','TiaController@rsvp')->name('tiarsvp');
        Route::get('/getrsvp','TiaController@getrsvp');
        Route::get('/cetakpdf','TiaController@cetakpdf')->name('tiacetak');
    });
});


Route::prefix('suhartono-dewi')
->namespace('suhartono')
->group(function(){
    Route::get('/home/{name?}','SuhartonoController@index')->name('suhartono');
    Route::get('/success','SuhartonoController@success')->name('suhartono-success');
    Route::post('/store','SuhartonoController@store')->name('suhartonostore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','SuhartonoController@dashboard')->name('suhartonodashboard');
        Route::get('/rsvp','SuhartonoController@rsvp')->name('suhartonorsvp');
        Route::get('/getrsvp','SuhartonoController@getrsvp');
        Route::get('/cetakpdf','SuhartonoController@cetakpdf')->name('suhartonocetak');
    });
});

Route::prefix('rizkywent')
->namespace('kevinresita')
->group(function(){
    Route::get('/home/{name?}','KevinresitaController@index')->name('rizky');
    Route::get('/success','KevinresitaController@success')->name('rizky-success');
    Route::post('/store','KevinresitaController@store')->name('rizkystore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','KevinresitaController@dashboard')->name('kevinresitadashboard');
        Route::get('/rsvp','KevinresitaController@rsvp')->name('kevinresitarsvp');
        Route::get('/getrsvp','KevinresitaController@getrsvp');
        Route::get('/cetakpdf','KevinresitaController@cetakpdf')->name('kevinresitacetak');
    });
});

Route::prefix('ridho-tasya')
->namespace('ridho')
->group(function(){
    Route::get('/home/{name?}','RidhoController@index')->name('ridho');
    Route::get('/success','RidhoController@success')->name('ridho-success');
    Route::post('/store','RidhoController@store')->name('ridhostore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','RidhoController@dashboard')->name('ridhodashboard');
        Route::get('/rsvp','RidhoController@rsvp')->name('ridhorsvp');
        Route::get('/getrsvp','RidhoController@getrsvp');
        Route::get('/cetakpdf','RidhoController@cetakpdf')->name('ridhocetak');
    });
});
Route::prefix('neno-mirfak')
->namespace('retno')
->group(function(){
    Route::get('/home/{name?}','RetnoController@index')->name('retno');
    Route::get('/success','RetnoController@success')->name('retno-success');
    Route::post('/store','RetnoController@store')->name('retnostore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','RetnoController@dashboard')->name('retnodashboard');
        Route::get('/rsvp','RetnoController@rsvp')->name('retnorsvp');
        Route::get('/getrsvp','RetnoController@getrsvp');
        Route::get('/cetakpdf','RetnoController@cetakpdf')->name('retnocetak');
    });
});

Route::prefix('riadi-anisa')
->namespace('riadi')
->group(function(){
    Route::get('/home/{name?}','RiadiController@index')->name('riadi');
    Route::get('/success','RiadiController@success')->name('riadi-success');
    Route::post('/store','RiadiController@store')->name('riadistore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','RiadiController@dashboard')->name('riadidashboard');
        Route::get('/rsvp','RiadiController@rsvp')->name('riadirsvp');
        Route::get('/getrsvp','RiadiController@getrsvp');
        Route::get('/cetakpdf','RiadiController@cetakpdf')->name('riadicetak');
    });
});

Route::prefix('septian-eri')
->namespace('eri')
->group(function(){
    Route::get('/home/{name?}','EriController@index')->name('eri');
    Route::get('/success','EriController@success')->name('eri-success');
    Route::post('/store','EriController@store')->name('eristore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','EriController@dashboard')->name('eridashboard');
        Route::get('/rsvp','EriController@rsvp')->name('erirsvp');
        Route::get('/getrsvp','EriController@getrsvp');
        Route::get('/cetakpdf','EriController@cetakpdf')->name('ericetak');
    });
});
Route::prefix('ari-ajeng')
->namespace('ari')
->group(function(){
    Route::get('/home/{name?}','AriController@index')->name('ari');
    Route::get('/success','AriController@success')->name('ari-success');
    Route::post('/store','AriController@store')->name('aristore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','AriController@dashboard')->name('aridashboard');
        Route::get('/rsvp','AriController@rsvp')->name('arirsvp');
        Route::get('/getrsvp','AriController@getrsvp');
        Route::get('/cetakpdf','AriController@cetakpdf')->name('aricetak');
    });
});

Route::prefix('abdul-laras')
->namespace('abdul')
->group(function(){
    Route::get('/home/{name?}','AbdulController@index')->name('abdul');
    Route::get('/success','AbdulController@success')->name('abdul-success');
    Route::post('/store','AbdulController@store')->name('abdulstore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','AbdulController@dashboard')->name('abduldashboard');
        Route::get('/rsvp','AbdulController@rsvp')->name('abdulrsvp');
        Route::get('/getrsvp','AbdulController@getrsvp');
        Route::get('/cetakpdf','AbdulController@cetakpdf')->name('abdulcetak');
    });
});


Route::prefix('hilman-elsa')
->namespace('hilman')
->group(function(){
    Route::get('/home/{name?}','HilmanController@index')->name('hilman');
    Route::get('/success','HilmanController@success')->name('hilman-success');
    Route::post('/store','HilmanController@store')->name('hilmanstore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','HilmanController@dashboard')->name('hilmandashboard');
        Route::get('/rsvp','HilmanController@rsvp')->name('hilmanrsvp');
        Route::get('/getrsvp','HilmanController@getrsvp');
        Route::get('/cetakpdf','HilmanController@cetakpdf')->name('hilmancetak');
    });
});


Route::prefix('febri-rakmah')
->namespace('febrirakmah')
->group(function(){
    Route::get('/home/{name?}','FebriController@index')->name('febri');
    Route::get('/success','FebriController@success')->name('febri-success');
    Route::post('/store','FebriController@store')->name('febristore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','FebriController@dashboard')->name('febridashboard');
        Route::get('/rsvp','FebriController@rsvp')->name('febrirsvp');
        Route::get('/getrsvp','FebriController@getrsvp');
        Route::get('/cetakpdf','FebriController@cetakpdf')->name('febricetak');
    });
});

Route::prefix('ageng-miftah')
->namespace('ageng')
->group(function(){
    Route::get('/home/{name?}','AgengController@index')->name('ageng');
    Route::get('/success','AgengController@success')->name('ageng-success');
    Route::post('/store','AgengController@store')->name('agengstore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','AgengController@dashboard')->name('agengdashboard');
        Route::get('/rsvp','AgengController@rsvp')->name('agengrsvp');
        Route::get('/getrsvp','AgengController@getrsvp');
        Route::get('/cetakpdf','AgengController@cetakpdf')->name('agengcetak');
    });
});


Route::prefix('aje-nur')
->namespace('nur')
->group(function(){
    Route::get('/home/{name?}','NurController@index')->name('ageng');
    Route::get('/success','NurController@success')->name('ageng-success');
    Route::post('/store','NurController@store')->name('agengstore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','NurController@dashboard')->name('agengdashboard');
        Route::get('/rsvp','NurController@rsvp')->name('agengrsvp');
        Route::get('/getrsvp','NurController@getrsvp');
        Route::get('/cetakpdf','NurController@cetakpdf')->name('agengcetak');
    });
});

Route::prefix('abdul-asti')
->namespace('abdulasti')
->group(function(){
    Route::get('/home/{name?}','AbdulAstiController@index')->name('abdulasti');
    Route::get('/success','AbdulAstiController@success')->name('abdulasti-success');
    Route::post('/store','AbdulAstiController@store')->name('abdulastistore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','AbdulAstiController@dashboard')->name('abdulastidashboard');
        Route::get('/rsvp','AbdulAstiController@rsvp')->name('abdulastirsvp');
        Route::get('/getrsvp','AbdulAstiController@getrsvp');
        Route::get('/cetakpdf','AbdulAstiController@cetakpdf')->name('abdulasticetak');
    });
});

Route::prefix('anwar-siti')
->namespace('anwar')
->group(function(){
    Route::get('/home/{name?}','AnwarController@index')->name('anwar');
    Route::get('/success','AnwarController@success')->name('anwar-success');
    Route::post('/store','AnwarController@store')->name('anwarstore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','AnwarController@dashboard')->name('anwardashboard');
        Route::get('/rsvp','AnwarController@rsvp')->name('anwarrsvp');
        Route::get('/getrsvp','AnwarController@getrsvp');
        Route::get('/cetakpdf','AnwarController@cetakpdf')->name('anwarcetak');
    });
});

Route::prefix('tri-sekar')
->namespace('trisekar')
->group(function(){
    Route::get('/home/{name?}','TrisekarController@index')->name('trisekar');
    Route::get('/success','TrisekarController@success')->name('trisekar-success');
    Route::post('/store','TrisekarController@store')->name('trisekarstore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','TrisekarController@dashboard')->name('trisekardashboard');
        Route::get('/rsvp','TrisekarController@rsvp')->name('trisekarrsvp');
        Route::get('/getrsvp','TrisekarController@getrsvp');
        Route::get('/cetakpdf','TrisekarController@cetakpdf')->name('trisekarcetak');
    });
});

Route::prefix('andre-cilla')
->namespace('andrecilla')
->group(function(){
    Route::get('/home/{name?}','AndreCillaController@index')->name('andrecilla');
    Route::get('/success','AndreCillaController@success')->name('andrecilla-success');
    Route::post('/store','AndreCillaController@store')->name('andrecillastore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','AndreCillaController@dashboard')->name('andrecilladashboard');
        Route::get('/rsvp','AndreCillaController@rsvp')->name('andrecillarsvp');
        Route::get('/getrsvp','AndreCillaController@getrsvp');
        Route::get('/cetakpdf','AndreCillaController@cetakpdf')->name('andrecillacetak');
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


