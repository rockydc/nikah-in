<?php

use Illuminate\Http\Request;
use App\Http\Controllers\daniel\DanielController;

use App\Http\Controllers\{
    Admin_2022\MenuController,
    api\v1\authController,
    api\v1\UserController,
    api\v1\TemplateController

};
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('daniela/wish_store', [DanielController::class, 'wishStore']);
Route::Group(['prefix' => 'admin'], function(){
    Route::post('get_menu_list', [MenuController::class, 'getMenuList'])->name('api.getMenu');
    Route::group(['prefix' => 'menu'], function(){
        Route::post('save', [MenuController::class, 'saveForm'])->name('menu.save');
    });
});
Route::group(['prefix' => 'v1'], function(){
    Route::post('register', [authController::class, 'register'])->name('api.register');
    Route::post('/login', [authController::class, 'authenticate'])->name('api.login');
    Route::post('/logout', [authController::class, 'logout'])->name('api.logout');
    Route::group(['prefix' => '', 'middleware' => 'auth:api'], function(){
        Route::post('profile', [authController::class, 'userProfile']);
        Route::group(['prefix' => 'user'], function(){
            Route::post('/create', [UserController::class, 'create']);
            Route::post('/delete', [UserController::class, 'delete']);
    
        });
        Route::group(['prefix' => 'template'], function(){
            Route::post('/create', [TemplateController::class, 'create']);
            Route::post('/delete', [TemplateController::class, 'delete']);
    
        });
    });

});

