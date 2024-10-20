<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/form', [FormController::class, 'create'])->name('form1');
Route::post('/form', [FormController::class, 'store']);




