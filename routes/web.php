<?php

use App\Http\Controllers\Web\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [WebController::class, 'admin'])->name('admin');
    Route::get('/admin/product', [WebController::class, 'productAdmin'])->name('admin-product');
    Route::get('/logout', [DataController::class, 'logout'])->name('logout');
});

Route::get('/login', [WebController::class, 'login'])->name('login');

Route::post('/auth', [DataController::class, 'login'])->name('auth');

// admin about us update
Route::post('/about-us', [DataController::class, 'aboutUs'])->name('about-us');
Route::delete('/admin/product/{id}', [DataController::class, 'productAdminDelete'])->name('admin-product-delete');
Route::get('/admin/product/form', [WebController::class, 'productAdminForm'])->name('admin-product-form');
Route::post('/admin/product/insert', [DataController::class, 'productAdminInsert'])->name('admin-product-insert');




Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/product', [WebController::class, 'product'])->name('product');
Route::get('/contact-us', [WebController::class, 'contactUs'])->name('contact-us');
Route::get('/article', [WebController::class, 'article'])->name('article');
