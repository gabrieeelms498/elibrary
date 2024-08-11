<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/insert', [AdminController::class, 'showInsertForm'])->name('admin.insert');
    Route::post('/admin/insert', [AdminController::class, 'insert'])->name('admin.insert.submit');
    Route::get('/admin/books', [AdminController::class, 'showBooks'])->name('admin.books');
    Route::get('/admin/books/edit/{id}', [AdminController::class, 'showEditForm'])->name('admin.books.edit');
    Route::put('/admin/books/edit/{id}', [AdminController::class, 'update'])->name('admin.books.update');
    Route::delete('/admin/books/delete/{id}', [AdminController::class, 'destroy'])->name('admin.books.delete');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user/insert', [UserController::class, 'showInsertForm'])->name('user.insert');
    Route::post('/user/insert', [UserController::class, 'insert'])->name('user.insert.submit');
    Route::get('/user/books', [UserController::class, 'showBooks'])->name('user.books');
    Route::get('/user/library', [UserController::class, 'showLibrary'])->name('user.library');
    Route::get('/user/books/edit/{id}', [UserController::class, 'showEditForm'])->name('user.books.edit');
    Route::put('/user/books/edit/{id}', [UserController::class, 'update'])->name('user.books.update');
    Route::delete('/user/books/delete/{id}', [UserController::class, 'destroy'])->name('user.books.delete');
});

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';