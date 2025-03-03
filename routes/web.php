<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/login',[AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware('auth')->name('dashboard');

Route::resource('empresa', CompanyController::class)->names('company');
Route::get('empresa/user/{id}', [CompanyController::class, 'indexFiltrado'])->name('company.indexFiltrado');

Route::resource('usuario', UserController::class)->names('user');
Route::get('usuario/empresa/{user_id}', [CompanyController::class, 'addCompanyToUser'])->name('user.addCompanyToUser');

Route::resource('rol', RolController::class)->names('rol');
/*
Route::get(('about'), function () {
    return view('about');
});

Route::resource('usuarios', UserController::class);
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
});*/
