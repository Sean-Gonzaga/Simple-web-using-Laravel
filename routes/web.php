<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use Symfony\Component\HttpFoundation\Request;

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

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/products', [MainController::class, 'products'])->name('products');

Route::get('/projects', [MainController::class, 'projects'])->name('projects');

// Route::get('/projects/banana-plantation', [MainController::class, 'banana_plantation'])->name('banana-plantation');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/about-us', [MainController::class, 'about_us'])->name('about-us');

//admin

Route::resource('/admin', AdminController::class);



