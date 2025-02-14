<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

//Route::resource('disco', DiskController::class)->names('disk');

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('empresa', CompanyController::class)->names('company');

/*
Route::get(('about'), function () {
    return view('about');
});

Route::resource('usuarios', UserController::class);
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');

Route::get('biblioteca', function (){
    return view('biblioteca');
});*/
