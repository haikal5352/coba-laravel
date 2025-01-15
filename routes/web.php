<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/mari', function () {
//     return view('index');
// });


use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);

Route::get('/',[PostController::class, 'index']);
// Post CRUD routes
Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); // Menampilkan daftar posts
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Formulir untuk membuat post baru
Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Menyimpan post baru ke database
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show'); // Menampilkan detail post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Formulir untuk mengedit post
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update'); // Memperbarui post di database
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); // Menghapus post