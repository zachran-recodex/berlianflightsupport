<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\PageSetupController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::post('/send/quote', [MainController::class, 'indexQuoteStore'])->name('home.quote.store');
Route::post('/send/contact', [MainController::class, 'indexContactStore'])->name('home.contact.store');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/services', [MainController::class, 'service'])->name('service');
Route::get('/services/{slug}', [MainController::class, 'serviceDetail'])->name('service.detail');
Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [MainController::class, 'blogDetail'])->name('blog.detail');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact', [MainController::class, 'contactStore'])->name('contact.store');
Route::get('/request-a-quote', [MainController::class, 'quote'])->name('quote');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function (){

        Route::middleware('can:manage abouts')->group(function () {
            Route::resource('abouts', AboutController::class);
        });

        Route::middleware('can:manage blogs')->group(function () {
            Route::resource('blogs', BlogController::class);
        });

        Route::middleware('can:manage contacts')->group(function () {
            // Rute resource untuk Contact
            Route::resource('contacts', ContactController::class);

            // Rute manual untuk Quote (karena mungkin tidak ingin menggunakan resource controller untuk Quote)
            Route::get('/quotes/{quote}', [ContactController::class, 'showQuote'])->name('quotes.show');
            Route::delete('/quotes/{quote}', [ContactController::class, 'destroyQuote'])->name('quotes.destroy');
        });

        Route::middleware('can:manage heroSections')->group(function () {
            Route::resource('heroSections', HeroSectionController::class);
        });

        Route::middleware('can:manage pageSetups')->group(function () {
            Route::resource('pageSetups', PageSetupController::class);
        });

        Route::middleware('can:manage services')->group(function () {
            Route::resource('services', ServiceController::class);
        });

        Route::middleware('can:manage settings')->group(function () {
            Route::resource('settings', SettingController::class);
        });

        Route::middleware('can:manage galleries')->group(function () {
            Route::resource('galleries', GalleryController::class);
        });
    });
});

require __DIR__.'/auth.php';
