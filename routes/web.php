<?php

use Illuminate\Support\Facades\Route;

Route::view('/wellcome', 'welcome')->name('wellcome');

Route::view('/', 'homepage')->name('home');

Route::view('/artikel', 'article')->name('artikel');

Route::view('/author', 'author')->name('author');

Route::view('dashboard', 'dashboard')
  ->middleware(['auth', 'verified'])
  ->name('dashboard');

Route::view('profile', 'profile')
  ->middleware(['auth'])
  ->name('profile');

require __DIR__ . '/auth.php';
