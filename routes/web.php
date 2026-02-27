<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

// Basic Routes
Route::get('/', function(){
    return 'Selamat Pagi';
});

Route::get('/hello', [WelcomeCOntroller::class,'hello']// Typo fixed: Word -> World
);

Route::resource('photo',PhotoController::class);

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function(){
    return '244107020056';
});

// Parameter Opsional (Mencakup parameter wajib juga)
Route::get('/user/{name?}', function ($name = 'Guest') {
    return 'Nama saya ' . $name;
});

// Multi-parameter
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Tugas Kecil
Route::get('/articles/{id}', function($id){
    return 'Halaman Artikel Dengan ID ' . $id;
});

// Named Route menggunakan Controller
Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');