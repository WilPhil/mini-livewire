<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home.index')->name('home');
Route::livewire('/users', 'pages::user.index')->name('users');
Route::livewire('/about', 'pages::about.index')->name('about');
