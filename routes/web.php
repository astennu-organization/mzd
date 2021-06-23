<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VideoGalleryController;
use Illuminate\Support\Facades\Route;


// Home
Route::get('/',                             [HomeController::class, 'index'])->name('home.index');

// About Us
Route::get('/about',                        [AboutController::class, 'index'])->name('about.index');
Route::get('/about/team',                   [AboutController::class, 'team'])->name('about.team');
Route::get('/about/contact',                [AboutController::class, 'contact'])->name('about.contact');
Route::post('/about/contact',               [AboutController::class, 'store'])->name('about.contact.store');

// News
Route::get('/news',                         [NewsController::class, 'index'])->name('news.index');
Route::post('/news',                         [NewsController::class, 'store'])->name('news.store');

// Gallery
Route::get('/gallery',                      [GalleryController::class, 'index'])->name('gallery.index');
// Photos
Route::get('/gallery/photos',               [PhotoGalleryController::class, 'index'])->name('photo.gallery.index');
Route::post('/gallery/photos',              [PhotoGalleryController::class, 'upload'])->name('photo.gallery.upload');
Route::delete('/gallery/photos/{id}',       [PhotoGalleryController::class, 'destroy'])->name('photo.gallery.destroy');
// Videos
Route::get('/gallery/videos',               [VideoGalleryController::class, 'index'])->name('video.gallery.index');
Route::post('/gallery/videos',              [VideoGalleryController::class, 'upload'])->name('video.gallery.upload');
Route::delete('/gallery/videos/{id}',       [VideoGalleryController::class, 'destroy'])->name('video.gallery.destroy');

// Report
Route::get('/report',                       [ReportController::class, 'index'])->name('report.index');

// Moderator
Route::get('/moderator',                    [ModeratorController::class, 'index'])->name('moderator.index');
Route::get('/moderator/login',              [ModeratorController::class, 'login'])->name('moderator.login');
Route::get('/moderator/logout',             [ModeratorController::class, 'logout'])->name('moderator.logout');
Route::post('/moderator/login',             [ModeratorController::class, 'store'])->name('moderator.login');
