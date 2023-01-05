<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'dashboard'])->name('site.index');

Route::get('/about_us', [AboutUsController::class, 'aboutUs'])->name('site.aboutus');

Route::get('/contact', [ContactController::class, 'contact'])->name('site.contact');


//private routes
Route::prefix('/app')->group(function (){

    Route::get('/login', function () {
        return 'Login';
    })->name('app.login');
    
    Route::get('/clients', function () {
        return 'Clients';
    })->name('app.clients');
    
    Route::get('/providers', function () {
        return 'Providers';
    })->name('app.providers');
    
    Route::get('/products', function () {
        return 'Providers';
    })->name('app.products');

});

