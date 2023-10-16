<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
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



Route::get('/', [LoginController::class, 'loginPage'])->name('login')->middleware('AuthCheck');
Route::post('/login', [LoginController::class, 'loginAction'])->name('loginAction');



Route::group(['middleware'=>'AuthUser'],function () {

    Route::get('/dashboard', [TransactionController::class, 'dashboard'])->name('dashboard');

    Route::resource('users', UserController::class);

    Route::get("show",[TransactionController::class,"show"])->name('transaction.show');

    Route::get("deposit",[TransactionController::class,"depositHistory"])->name('depositHistory');

    Route::get("deposit/create",[TransactionController::class,"depositPage"])->name('deposit.create');

    Route::post("deposit/store",[TransactionController::class,"deposit"])->name('deposit');

    Route::get("withdrawal",[TransactionController::class,"withdrawalHistory"])->name('withdrawalHistory');

    Route::get("withdrawal/create",[TransactionController::class,"withdrawPage"])->name('withdraw.create');

    Route::post("withdraw",[TransactionController::class,"withdrawalHistory"])->name('withdraw');

});
