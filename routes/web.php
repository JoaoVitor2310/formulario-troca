<?php

use App\Livewire\Categories\Index as CategoriesIndex;
use App\Livewire\Device\DeviceIndex;
use App\Livewire\DeviceTypes\DeviceTypesIndex;
use App\Livewire\DeviceVariants\DeviceVariantsCreate;
use App\Livewire\DeviceVariants\DeviceVariantsIndex;
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
    });

    Route::prefix('devices')->group(function () {
        Route::get('/{device_type}', DeviceIndex::class)->name('devices.index');
    });

    Route::prefix('device_variants')->group(function () {
        Route::get('/{device}', DeviceVariantsIndex::class)->name('device_variants.index');
        Route::get('/{device}/create', DeviceVariantsCreate::class)->name('device_variants.create');
        Route::get('/{device}/{device_variant}/edit', DeviceVariantsCreate::class)->name('device_variants.edit');
    });


    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
