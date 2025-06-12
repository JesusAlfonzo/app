<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard', 'Inicio');

Route::get('/Categoria', CategoriaController::class)
    ->middleware(['auth', 'verified'])
    ->name('categoria');

Route::get('/Productos', ProductoController::class)
    ->middleware(['auth', 'verified'])
    ->name('Productos');

Route::get('/Presentacion', PresentacionController::class)
    ->middleware(['auth', 'verified'])
    ->name('Presentacion');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
