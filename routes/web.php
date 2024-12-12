<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home.index');
Route::get('/about-me', [HomeController::class, 'about'])->name('about.index');
Route::get('/services', [HomeController::class, 'services'])->name('services.index');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio.index');
Route::get('/{Portfolio}/project-details', [HomeController::class, 'projectDetails'])->name('project.details.index');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.index');
Route::post('/contact-us', [HomeController::class, 'contactUsStore'])->name('contact.store');
