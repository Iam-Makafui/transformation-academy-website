<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



/**
 * GET ROUTES
 */

//route for landing  page
Route::get('/', [PagesController::class, 'LandingPage'])->name('landing-page');

Route::get('/about/history', [PagesController::class, 'historyPage'])->name('/about/history');
