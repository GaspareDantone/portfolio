<?php

use App\Http\Controllers\Pagecontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/aboutme', function () {
    return view('aboutme');
})->name('aboutme');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');