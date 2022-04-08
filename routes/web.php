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
use Controllers\{
    AuthenticationController,
    Admin_2022\MainController,
};
use Livewire\{
    Menu,
    TableUsers,
    Admin\Menu as MenuListPage,
    Admin\Menu\CreateForm as MenuForm
};
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

Route::get('/','Controllers\HomeController@index')->name('home');
Route::get('/getdatadesain','Controllers\HomeController@getdata');
Route::get('/rsvpsucces',function(){
    return view ('layouts.user.rsvpsuccespage');
})->name('success');


Route::prefix("desain")
    ->namespace('desain')
    ->group(function(){
        Route::get('/','Controllers\DesainController@index')->name('desainUser');
        Route::get('/getdata','Controllers\DesainController@getdata')->name('desainGet');
        Route::get('/getporto','Controllers\DesainController@getporto')->name('portoGet');
        
        Route::get('/preview/{nama}/view/{view}','Controllers\DesainController@preview');
        Route::get('/template/{nama}','Controllers\DesainController@template');
    
    });



// Admin/*
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','Controllers\admin'])
    ->group(function(){
        Route::get('/','Controllers\DashboardController@index')
        ->name('dashboardhome');
        Route::resource('portofolio','Controllers\PortofolioController');
        Route::resource('desain','Controllers\DesainController');
        Route::resource('message','Controllers\MessageController');
        
    });


// Anes/*
Route::prefix('anes-nahomi')
    ->namespace('Anes')
    ->group(function(){
        Route::get('/','Controllers\AnesController@index')
        ->name('anes');
        Route::post('/store','Controllers\AnesController@store')
        ->name('anesStore');
        Route::get('/guestbook','Controllers\AnesController@guest')
        ->name('anesguest');
        Route::post('/gueststore','Controllers\AnesController@gueststore')
        ->name('gueststore');
        Route::get('data-rsvp','Controllers\AnesController@rsvp')->name('datarsvp');
        Route::get('data-rsvp/cetakpdf','Controllers\AnesController@cetakpdf')->name('anescetak');
        Route::prefix('admin')
        ->middleware(['auth','Controllers\admin'])
        ->group(function(){
            Route::get('/','Controllers\AnesController@dashboard')
            ->name('anesdashboard');
            Route::get('/getrsvp','Controllers\AnesController@getrsvp');
            Route::get('/rsvp','Controllers\AnesController@rsvp')->name('anesrsvp');
            Route::get('guestbook','Controllers\AnesController@guestbook')->name('anesguestbook');
        });


    });



Route::prefix('Hesti_Isby')
->namespace('isby')
->group(function(){
    Route::get('/','Controllers\IsbyController@index')->name('isby');
    Route::get('/success','Controllers\IsbyController@success')->name('isby-success');
    Route::post('/store','Controllers\IsbyController@store')->name('isbystore');
   
    Route::prefix('admin')
    ->middleware(['auth','Controllers\isby'])
    ->group(function(){
        Route::get('/','Controllers\IsbyController@dashboard')->name('isbydashboard');
        Route::get('/rsvp','Controllers\IsbyController@rsvp')->name('isbyrsvp');
        Route::get('/getrsvp','Controllers\IsbyController@getrsvp');
        
    });
});

Route::prefix('Peter_Melita')
->namespace('peter')

->group(function(){
    Route::get('/','Controllers\PeterController@index')->name('Peter');
    Route::get('/succes','Controllers\PeterController@success')->name('peter-success');
    Route::post('/store','Controllers\PeterController@store')->name('peterstore');

    Route::prefix('admin')
    ->group(function(){
        Route::get('/','Controllers\PeterController@dashboard')->name('peterdashboard');
        Route::get('/rsvp','Controllers\PeterController@rsvp')->name('peterrsvp');
        Route::get('/getrsvp','Controllers\PeterController@getrsvp')->name('petergetrsvp');
    });
});


Route::prefix('daniela')
->namespace('daniel')
->group(function(){
    Route::get('/','Controllers\DanielController@index')->name('daniel');
    Route::get('/succes','Controllers\DanielController@success')->name('daniel-success');
    Route::post('/store','Controllers\DanielController@store')->name('danielstore');

    Route::prefix('admin')
    ->group(function(){
        Route::get('/','Controllers\DanielController@dashboard')->name('danieldashboard');
        Route::get('/rsvp','Controllers\DanielController@rsvp')->name('danielrsvp');
        Route::get('/getrsvp','Controllers\DanielController@getrsvp')->name('danielgetrsvp');
    });
});


Route::prefix('pipitficry')
->namespace('ficry')
->group(function(){
    Route::get('/','Controllers\ficryController@index')->name('ficry');
    Route::get('/success','Controllers\ficryController@success')->name('ficry-success');
    Route::post('/store','Controllers\ficryController@store')->name('ficrystore');

    Route::prefix('admin')
    ->middleware(['auth','Controllers\ficry'])
    ->group(function(){
        Route::get('/','Controllers\FicryController@dashboard')->name('ficrydashboard');
        Route::get('/rsvp','Controllers\FicryController@rsvp')->name('ficryrsvp');
        Route::get('/getrsvp','Controllers\FicryController@getrsvp');
    });
});

Route::prefix('ferry-nitia')
->namespace('ferry')
->group(function(){
    Route::get('/','Controllers\FerryController@index')->name('ferry');
    Route::get('/success','Controllers\FerryController@success')->name('ferry-success');
    Route::post('/store','Controllers\FerryController@store')->name('ferrystore');

    Route::prefix('admin')
    ->middleware(['auth','Controllers\ferry'])
    ->group(function(){
        Route::get('/','Controllers\FerryController@dashboard')->name('ferrydashboard');
        Route::get('/rsvp','Controllers\FerryController@rsvp')->name('ferryrsvp');
        Route::get('/getrsvp','Controllers\FerryController@getrsvp');
        
    });
});

Route::prefix('riowira-anisa')
->namespace('riowira')
->group(function(){
    Route::get('/','Controllers\RiowiraController@index')->name('riowira');
    Route::get('/success','Controllers\RiowiraController@success')->name('riowira-success');
    Route::post('/store','Controllers\RiowiraController@store')->name('riowirastore');

    Route::prefix('admin')
    ->middleware(['auth','Controllers\riowira'])
    ->group(function(){
        Route::get('/','Controllers\RiowiraController@dashboard')->name('riowiradashboard');
        Route::get('/rsvp','Controllers\RiowiraController@rsvp')->name('riowirarsvp');
        Route::get('/getrsvp','Controllers\RiowiraController@getrsvp');
        
    });
});


Route::prefix('adit-ika')
->namespace('ardy')
->group(function(){
    Route::get('/home/{name?}','Controllers\ArdyController@index')->name('ardy');
    Route::get('/success','Controllers\ArdyController@success')->name('ardy-success');
    Route::post('/store','Controllers\ArdyController@store')->name('ardystore');

    Route::prefix('admin')
    ->middleware(['auth','Controllers\ardy'])
    ->group(function(){
        Route::get('/','Controllers\ArdyController@dashboard')->name('ardydashboard');
        Route::get('/rsvp','Controllers\ArdyController@rsvp')->name('ardyrsvp');
        Route::get('/getrsvp','Controllers\ArdyController@getrsvp');
        Route::get('/cetakpdf','Controllers\ArdyController@cetakpdf')->name('ardycetak');
        
    });
});


Route::prefix('adhi-gita')
->namespace('adhigita')
->group(function(){
    Route::get('/home/{name?}','Controllers\AdhigitaController@index')->name('adhigita');
    Route::get('/success','Controllers\AdhigitaController@success')->name('adhigita-success');
    Route::post('/store','Controllers\AdhigitaController@store')->name('adhigitastore');

    Route::prefix('admin')
    ->middleware(['auth','Controllers\adhigita'])
    ->group(function(){
        Route::get('/','Controllers\AdhigitaController@dashboard')->name('adhigitadashboard');
        Route::get('/rsvp','Controllers\AdhigitaController@rsvp')->name('adhigitarsvp');
        Route::get('/getrsvp','Controllers\AdhigitaController@getrsvp');
        Route::get('/cetakpdf','Controllers\AdhigitaController@cetakpdf')->name('adhigitacetak');
        
    });
});


Route::prefix('jauza-agus')
->namespace('jauja')
->group(function(){
    Route::get('/home/{name?}','Controllers\JaujaController@index')->name('jauja');
    Route::get('/success','Controllers\JaujaController@success')->name('jauja-success');
    Route::post('/store','Controllers\JaujaController@store')->name('jaujastore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','Controllers\JaujaController@dashboard')->name('jaujadashboard');
        Route::get('/rsvp','Controllers\JaujaController@rsvp')->name('jaujarsvp');
        Route::get('/getrsvp','Controllers\JaujaController@getrsvp');
        Route::get('/cetakpdf','Controllers\JaujaController@cetakpdf')->name('jaujacetak');
    });
});

    Route::prefix('Andreas-Deve')
->namespace('andreasdeve')
->group(function(){
    Route::get('/home/{name?}','Controllers\AndreasdeveController@index')->name('andreasdeve');
    Route::get('/success','Controllers\AndreasdeveController@success')->name('andreasdeve-success');
    Route::post('/store','Controllers\AndreasdeveController@store')->name('andreasdevestore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','Controllers\AndreasdeveController@dashboard')->name('andreasdevedashboard');
        Route::get('/rsvp','Controllers\AndreasdeveController@rsvp')->name('andreasdeversvp');
        Route::get('/getrsvp','Controllers\AndreasdeveController@getrsvp');
        Route::get('/cetakpdf','Controllers\AndreasdeveController@cetakpdf')->name('andreasdevecetak');
    });
});


Route::prefix('suhartono-dewi')
->namespace('suhartono')
->group(function(){
    Route::get('/home/{name?}','Controllers\SuhartonoController@index')->name('suhartono');
    Route::get('/success','Controllers\SuhartonoController@success')->name('suhartono-success');
    Route::post('/store','Controllers\SuhartonoController@store')->name('suhartonostore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','Controllers\SuhartonoController@dashboard')->name('suhartonodashboard');
        Route::get('/rsvp','Controllers\SuhartonoController@rsvp')->name('suhartonorsvp');
        Route::get('/getrsvp','Controllers\SuhartonoController@getrsvp');
        Route::get('/cetakpdf','Controllers\SuhartonoController@cetakpdf')->name('suhartonocetak');
    });
});

Route::prefix('kevinresita')
->namespace('kevinresita')
->group(function(){
    Route::get('/home/{name?}','Controllers\kevinresitaController@index')->name('kevinresita');
    Route::get('/success','Controllers\kevinresitaController@success')->name('kevinresita-success');
    Route::post('/store','Controllers\kevinresitaController@store')->name('kevinresitastore');

    Route::prefix('admin')
   
    ->group(function(){
        Route::get('/','Controllers\kevinresitaController@dashboard')->name('kevinresitadashboard');
        Route::get('/rsvp','Controllers\kevinresitaController@rsvp')->name('kevinresitarsvp');
        Route::get('/getrsvp','Controllers\kevinresitaController@getrsvp');
        Route::get('/cetakpdf','Controllers\kevinresitaController@cetakpdf')->name('kevinresitacetak');
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
Route::get('/new_login', Menu::class)->name('login_page');
Route::group(['prefix' => 'admin'], function(){
    Route::get('user_list', TableUsers::class)->name('user_list');
    Route::group(['prefix' => 'menu'], function(){
        Route::get('', MenuListPage::class)->name('list_menu');
        Route::get('/form/{id?}', MenuForm::class)->name('menu_form');
    });
});
Auth::routes();


