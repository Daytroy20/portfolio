<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\PublicProjectController;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');


// Admin login routes
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin dashboard & project CRUD

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [ProjectController::class, 'index'])->name('dashboard');
    Route::resource('projects', ProjectController::class); 
});


// Public portfolio routes
Route::get('/projects', [PublicProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project:slug}', [PublicProjectController::class, 'show'])->name('projects.show');

// Home page
Route::get('/', function () {
    return view('home');
});

