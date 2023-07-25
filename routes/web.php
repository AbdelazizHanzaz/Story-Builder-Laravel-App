<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Auth;

Auth::routes();



// Story Routes
Route::resource('stories', StoryController::class);



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/landing', function(){
      return view('landing.main');
});


Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');
