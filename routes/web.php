<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');
Route::get('/admin/form-elements', [AdminController::class, 'form'])->name('admin.form');
Route::get('/admin/table-plugins', [AdminController::class, 'table'])->name('admin.table');
Route::get('/admin/modal-notification', [AdminController::class, 'notification'])->name('admin.notification');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::get('/landing', [LandingController::class, 'index']);
Route::get('/landing/about', [LandingController::class, 'about']);
Route::get('/landing/course', [LandingController::class, 'course']);
Route::get('/landing/blog', [LandingController::class, 'blog']);
Route::get('/landing/feature', [LandingController::class, 'feature']);
Route::get('/landing/contact', [LandingController::class, 'contact']);

Route::get('/', function () {
    return view('admin.dashboard');
});