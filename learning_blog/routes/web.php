<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('blogs', [App\Http\Controllers\Frontend\FrontendController::class, 'viewBlogs']);
Route::get('blogs/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewBlog']);
Route::get('contactUs', [App\Http\Controllers\Frontend\FrontendController::class, 'ContactPage']);

//contacts route
Route::post('contacts', [App\Http\Controllers\Frontend\ContactController::class, 'store']);


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('chats', [App\Http\Controllers\Admin\DashboardController::class, 'chats']);

    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);
    

    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
});
