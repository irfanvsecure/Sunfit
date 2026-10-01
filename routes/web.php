<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Sunfit General Contracting — Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/contact', 'pages.contact')->name('contact');

// Individual service pages: /services/civil-works, /services/electrical-works ...
Route::prefix('services')->name('services.')->group(function () {
    Route::view('/civil-works', 'services.civil-works')->name('civil-works');
    Route::view('/structural-works', 'services.structural-works')->name('structural-works');
    Route::view('/electrical-works', 'services.electrical-works')->name('electrical-works');
    Route::view('/mechanical-works', 'services.mechanical-works')->name('mechanical-works');
    Route::view('/plumbing-works', 'services.plumbing-works')->name('plumbing-works');
    Route::view('/interior-design-works', 'services.interior-design-works')->name('interior-design-works');
});
