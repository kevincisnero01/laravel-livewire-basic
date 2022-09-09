<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Products\IndexComponent;
use App\Http\Livewire\Products\CreateComponent;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products',IndexComponent::class)->name('products.index');
Route::get('/products/create',CreateComponent::class)->name('products.create');