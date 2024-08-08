<?php

use Illuminate\Support\Facades\Route;

//Importing the Controller Page
use App\Http\Controllers\PageController;

//Importing the PlaceController Page
use App\Http\Controllers\PlaceController;

//Importing the SearchController Page
use App\Http\Controllers\SearchController;

//Route to home page
Route::get('/', [PageController::class, 'home']);

//Route to information page
Route::get('/information', [PageController::class, 'information']);

//Route to available page
Route::get('/available', [PageController::class, 'available']);

//Route to reviews page
Route::get('/reviews', [PageController::class, 'reviews']);

//Route to features page
Route::get('/features', [PageController::class, 'features']);

//Route to contact page
Route::get('/contact', [PageController::class, 'contact']);

//Route to attractions page
Route::get('/attractions', [PageController::class, 'attractions']);

//Route to places page
Route::get('/places', [PlaceController::class, 'create'])->name('places.create');
Route::post('/places', [PlaceController::class, 'store']);

//Route to search page
Route::get('/search', [SearchController::class, 'search'])->name('search');