<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Website\BasicController;

// Website Routes
Route::get('/', [BasicController::class, 'home'])->name('website.home');
Route::get('/about', [BasicController::class, 'about'])->name('website.about');
Route::get('/services', [BasicController::class, 'services'])->name('website.services');
Route::get('/hvac', [BasicController::class, 'hvac'])->name('website.hvac');
Route::get('/career', [BasicController::class, 'career'])->name('website.career');
Route::get('/contact', [BasicController::class, 'contact'])->name('website.contact');

// Website Form Submissions
Route::post('/contact', [BasicController::class, 'submitContact'])->name('website.contact.submit');
Route::post('/callback', [BasicController::class, 'submitCallback'])->name('website.callback.submit');
Route::post('/newsletter', [BasicController::class, 'subscribeNewsletter'])->name('website.newsletter.subscribe');

// Website API Routes
Route::get('/api/statistics', [BasicController::class, 'getStatistics'])->name('website.api.statistics');
Route::get('/api/testimonials', [BasicController::class, 'getTestimonials'])->name('website.api.testimonials');
Route::get('/api/services', [BasicController::class, 'getServices'])->name('website.api.services');

// Admin Routes
Route::get('admin/', function () {
    return Inertia::render('admin/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
