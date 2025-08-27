<?php

use App\Livewire\Categories\Index as CategoriesIndex;
use App\Livewire\DeviceTypes\Index as DeviceTypesIndex;
use App\Livewire\DeviceTypes\Show as DeviceTypesShow;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::prefix('device_types')->group(function () {
        Route::get('/', DeviceTypesIndex::class)->name('device_types.index');     // listar todos
        Route::get('/{device_type}', DeviceTypesShow::class)->name('device_types.show');     
        // Route::get('/create', Create::class)->name('create'); // criar novo
        // Route::get('/{device}', Show::class)->name('show');   // detalhes
        // Route::get('/{device}/edit', Edit::class)->name('edit'); // editar
    });
    
    // Route::prefix('categories')->name('categories.')->group(function () {
    //     Route::get('/', CategoriesIndex::class)->name('index');     // listar todos
    //     // Route::get('/create', Create::class)->name('create'); // criar novo
    //     // Route::get('/{device}', Show::class)->name('show');   // detalhes
    //     // Route::get('/{device}/edit', Edit::class)->name('edit'); // editar
    // });

    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
