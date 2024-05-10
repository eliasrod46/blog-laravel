<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;




//---Admin
Route::get('/admin', function () {
    return view('admin.home');
})->name('admin.home');



Route::resource('admin/users', UserController::class)->names('admin.users');
Route::resource('admin/categories', CategoryController::class)->names('admin.categories');
Route::resource('admin/tags', TagController::class)->names('admin.tags');
Route::resource('admin/posts', PostController::class)->names('admin.posts');



require __DIR__.'/auth.php';
