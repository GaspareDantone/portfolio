<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class, 'homepage'] )->name('homepage');

Route::get('/project',[PageController::class, 'project'] )->name('project');

Route::get('/aboutme',[PageController::class, 'aboutme'] )->name('aboutme');


Route::get('/contact',[PageController::class, 'contact'] )->name('contact');
Route::post('/send',[PageController::class, 'send'] )->name('send');

Route::get('/thankyou',[PageController::class, 'thankyou'] )->name('emails.thankyou');

Route::get('/downloadcv',[PageController::class, 'downloadcv'] )->name('downloadcv');




