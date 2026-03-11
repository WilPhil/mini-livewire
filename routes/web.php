<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home.index')->name('home');
Route::livewire('/users', 'pages::user.index')->name('users');
Route::livewire('/contact', 'pages::contact.index')->name('contact');
