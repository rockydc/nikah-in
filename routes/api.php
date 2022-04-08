<?php

use Illuminate\Http\Request;
use App\Http\Controllers\daniel\DanielController;

use App\Http\Controllers\{
    Admin_2022\MenuController
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

