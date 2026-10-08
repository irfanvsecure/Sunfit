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
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/projects', fn () => redirect(route('projects.completed'), 301))->name('projects');
Route::view('/projects/ongoing', 'pages.projects-ongoing')->name('projects.ongoing');
Route::view('/projects/completed', 'pages.projects-completed')->name('projects.completed');

Route::prefix('services')->name('services.')->group(function () {
    Route::view('/civil-fit-out', 'services.civil-fit-out')->name('civil-fit-out');
    Route::view('/mep-works', 'services.mep-works')->name('mep-works');
    Route::view('/demolition-works', 'services.demolition-works')->name('demolition-works');
    Route::view('/authority-approvals', 'services.authority-approvals')->name('authority-approvals');

    Route::get('/civil-works', fn () => redirect(route('services.civil-fit-out').'#civil', 301));
    Route::get('/structural-works', fn () => redirect(route('services.civil-fit-out').'#structural', 301));
    Route::get('/interior-design-works', fn () => redirect(route('services.civil-fit-out').'#interior', 301));
    Route::get('/electrical-works', fn () => redirect(route('services.mep-works').'#electrical', 301));
    Route::get('/mechanical-works', fn () => redirect(route('services.mep-works').'#mechanical', 301));
    Route::get('/plumbing-works', fn () => redirect(route('services.mep-works').'#plumbing', 301));
});
