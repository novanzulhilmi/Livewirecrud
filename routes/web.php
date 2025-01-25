<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Posts;
   //Novan Nur Zulhilmi Yardana

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //Posts Route - Novan Nur Zulhilmi Yardana
    // Route::get('/posts', function () {
    //     return view('livewire.posts'); 
    // })->name('posts');
    Route::get('/posts', Posts::class)->name('posts');
});
