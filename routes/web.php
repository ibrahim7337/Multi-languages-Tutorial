<?php

use App\Http\Controllers\Dashboard\SettingController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});

Route::group(['prefix'=>'dashboard' , 'as'=>'dashboard.'] , function(){
    Route::get('/settings' , function(){
        return view('dashboard.settings');
    })->name('settings');

    Route::post('/settings/update/{setting}' , [SettingController::class , 'update'])->name('settings.update');
});