<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home page view
Route::get('/', [PageController::class, 'index'])->name('page.index');

// Catch all for routes not defined above
Route::get('/{slug}', [PageController::class, 'view'])->where('slug', '.+')->name('page.view');