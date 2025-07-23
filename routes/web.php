<?php

use App\Http\Controllers\Pagecontroller;
use Illuminate\Support\Facades\Route;


Route::get('/',[Pagecontroller::class, 'homepage'] )->name('homepage');

Route::get('/project',[Pagecontroller::class, 'project'] )->name('project');

Route::get('/aboutme',[Pagecontroller::class, 'aboutme'] )->name('aboutme');


Route::get('/contact',[Pagecontroller::class, 'contact'] )->name('contact');
Route::post('/send',[Pagecontroller::class, 'send'] )->name('send');

Route::get('/thankyou',[Pagecontroller::class, 'thankyou'] )->name('emails.thankyou');

Route::get('/downloadcv',[Pagecontroller::class, 'downloadcv'] )->name('downloadcv');




