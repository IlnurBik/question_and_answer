<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', MainController::class)->name('main.index');

Route::group(['middleware' => 'authcheck'], function(){
    Route::resource('/questions', \App\Http\Controllers\QuestionController::class);
});
