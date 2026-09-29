<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return redirect(url('/'));
});

Route::get('/{page}', function () {
    return view('home');
})->where('page', 'about|services|projects|contact|civil-works|structural-works|electrical-works|mechanical-works|plumbing-works|interior-design-works');
