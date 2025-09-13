<?php

use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\Settings\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('auth')->group(function () {
    // Settings redirect
    Route::redirect('admin/settings', '/admin/settings/profile');

    // Profile settings routes
    Route::prefix('admin/settings/profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    // Password settings routes
    Route::prefix('admin/settings/password')->name('password.')->group(function () {
        Route::get('/', [PasswordController::class, 'edit'])->name('edit');
        Route::put('/', [PasswordController::class, 'update'])
            ->middleware('throttle:6,1')
            ->name('update');
    });

    // Appearance settings route
    Route::get('admin/settings/appearance', function () {
        return Inertia::render('settings/Appearance');
    })->name('appearance');

    // Admin testimonials routes
    Route::prefix('admin/testimonials')->name('admin.testimonials.')->group(function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('index');
        Route::get('/create', [TestimonialController::class, 'create'])->name('create');
        Route::post('/', [TestimonialController::class, 'store'])->name('store');
        Route::get('/{testimonial}', [TestimonialController::class, 'show'])->name('show');
        Route::get('/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('edit');
        Route::patch('/{testimonial}', [TestimonialController::class, 'update'])->name('update');
        Route::delete('/{testimonial}', [TestimonialController::class, 'destroy'])->name('destroy');
        Route::patch('/{testimonial}/toggle-status', [TestimonialController::class, 'toggleStatus'])->name('toggle-status');
    });
});
