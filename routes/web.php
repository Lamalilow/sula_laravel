<?php

use App\Http\Controllers\AnketController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'indexView'])->name('/');



Route::get('registration', [UserController::class, 'registrationView'])->name('registration');
Route::post('registration', [UserController::class, 'registrationPost']);
Route::get('login', [UserController::class, 'loginView'])->name('login');
Route::post('login', [UserController::class, 'loginPost']);

Route::middleware('auth')->group(function (){
    Route::middleware('role:user,admin')->group(function (){
        Route::get('anket', [AnketController::class, 'anketView'])->name('anket');
        Route::middleware('role:admin')->group(function (){

        });


    });
    Route::get('cabinet', [UserController::class, 'cabinet'])->name('cabinet');
    Route::get('cabinet/edit', [UserController::class, 'cabinetEdit'])->name('cabinetEdit');
    Route::post('cabinet/edit', [UserController::class, 'cabinetEditPost']);
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});
