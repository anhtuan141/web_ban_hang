<?php

use App\Http\Controllers\Admin\UserController;
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

Route::get('/home', function () {
    return view('admin.pages.index');
});

Route::resource('users', UserController::class);

// Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

// Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');

// Route::put('/users/edit/{id}', [UserController::class, 'update'])->name('users.update');

// Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
