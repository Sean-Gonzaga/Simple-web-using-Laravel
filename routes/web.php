<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/default', function () {
    return view('pages.default');
});

Route::get('/about-us', [mainController::class, 'about-us']);

//routes and response
Route::get('/sample/{id}', function ($id) {
    return response($id. " ".'<-wildcard value');
});

// Route::get('/search', function (Request $request) {
//     return ($request->name ." ". $request->pet);
// });

// Route::get('/products', [ProductController::class,'index'])->name('products');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');