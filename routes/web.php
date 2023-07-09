<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;


Auth::routes();


Route::get('/', function(){
    return view('home');
});

Route::get('/', function(){
    return view('home');
})->name('home');
// Story Routes
Route::resource('stories', StoryController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');
