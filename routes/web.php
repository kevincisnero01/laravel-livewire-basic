<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products',App\Http\Livewire\Products\IndexComponent::class)->name('products.index');
Route::get('/products/create',App\Http\Livewire\Products\CreateComponent::class)->name('products.create');

Route::get('/files',App\Http\Livewire\Files\IndexComponent::class)->name('files.index');
Route::get('/files/create',App\Http\Livewire\Files\CreateComponent::class)->name('files.create');

Route::get('/employees',App\Http\Livewire\Employees\IndexComponent::class)->name('employees.index');
Route::get('/employees/create',App\Http\Livewire\Employees\CreateComponent::class)->name('employees.create');
Route::get('/employees/{employee}/edit',App\Http\Livewire\Employees\EditComponent::class)->name('employees.edit');
