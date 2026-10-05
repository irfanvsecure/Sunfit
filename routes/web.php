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

// Individual service pages: /services/civil-works, /services/mep-works ...
Route::prefix('services')->name('services.')->group(function () {
    Route::view('/civil-works', 'services.civil-works')->name('civil-works');
    Route::view('/structural-works', 'services.structural-works')->name('structural-works');
    Route::view('/mep-works', 'services.mep-works')->name('mep-works');
    Route::view('/interior-design-works', 'services.interior-design-works')->name('interior-design-works');

    // Electrical, mechanical and plumbing were merged into MEP Works — keep old links working.
    Route::get('/electrical-works', fn () => redirect(route('services.mep-works').'#electrical', 301));
    Route::get('/mechanical-works', fn () => redirect(route('services.mep-works').'#mechanical', 301));
    Route::get('/plumbing-works', fn () => redirect(route('services.mep-works').'#plumbing', 301));
});
