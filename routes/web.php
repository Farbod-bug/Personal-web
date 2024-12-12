<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home.index')->middleware('uniqueVisitors');
Route::get('/about-me', [HomeController::class, 'about'])->name('about.index')->middleware('uniqueVisitors');
Route::get('/services', [HomeController::class, 'services'])->name('services.index')->middleware('uniqueVisitors');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio.index')->middleware('uniqueVisitors');
Route::get('/{Portfolio}/project-details', [HomeController::class, 'projectDetails'])->name('project.details.index')->middleware('uniqueVisitors');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.index')->middleware('uniqueVisitors');
Route::post('/contact-us', [HomeController::class, 'contactUsStore'])->name('contact.store')->middleware('uniqueVisitors');
