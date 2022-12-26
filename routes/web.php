<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::view('/services', 'landingpage.services');
Route::view('/about', 'landingpage.about');
Route::get('/article', [LandingPageController::class, 'article'])->name('article');
Route::get('/article/category/{category:slug}', [LandingPageController::class, 'article'])->name('category');
Route::get('/article/{post:slug}', [LandingPageController::class, 'post'])->name('post');
Route::view('/contact', 'landingpage.contact');

Auth::routes();

Route::middleware('auth')->group(function () {
    // home
    // Route::get('/home', [HomeController::class, 'index'])->name('home');

    // post
    Route::get('/home', [PostController::class, 'index'])->name('post');

    // category
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

    // create new post
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

    // save new post
    Route::post('/post/create', [PostController::class, 'store'])->name('post.store');

    // add new category
    Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');

    // edit post
    Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');

    // update post
    Route::post('/home', [PostController::class, 'update'])->name('post.update');

    // delete post
    Route::delete('/post/{post:slug}', [PostController::class, 'destroy'])->name('post.destroy');

    // delete category
    Route::delete('/categories/{category:slug}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
