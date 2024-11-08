<?php

use App\Http\Controllers\BlogSectionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/' , fn()=>view('dashboard.dashboard'))->name('dashboard');

// user routes
Route::get('user/index' , [UserController::class , 'index'])->name('user.index');
Route::get('user/create' , [UserController::class , 'create'])->name('user.create');
Route::post('user/store' , [UserController::class , 'store'])->name('user.store');
Route::get('user/{id}/edit' , [UserController::class , 'edit'])->name('user.edit');
Route::put('user/{id}/update' , [UserController::class , 'update'])->name('user.update');
Route::delete('user/{id}' , [UserController::class , 'destroy'])->name('user.destroy');

// blog section routes
Route::get('blog_section/index' , [BlogSectionController::class , 'index'])->name('blog_section.index');
Route::get('blog_section/create' , [BlogSectionController::class , 'create'])->name('blog_section.create');
Route::post('blog_section/store' , [BlogSectionController::class , 'store'])->name('blog_section.store');
Route::get('blog_section/{id}/edit' , [BlogSectionController::class , 'edit'])->name('blog_section.edit');
Route::put('blog_section/{id}/update' , [BlogSectionController::class , 'update'])->name('blog_section.update');
Route::delete('blog_section/{id}' , [BlogSectionController::class , 'destroy'])->name('blog_section.destroy');

// blog
Route::get('blog/index' , [BlogController::class , 'index'])->name('blog.index');
Route::get('blog/create' , [BlogController::class , 'create'])->name('blog.create');
Route::post('blog/store' , [BlogController::class , 'store'])->name('blog.store');
Route::get('blog/{id}/edit' , [BlogController::class , 'edit'])->name('blog.edit');
Route::put('blog/{id}/update' , [BlogController::class , 'update'])->name('blog.update');
Route::delete('blog/{id}' , [BlogController::class , 'destroy'])->name('blog.destroy');


