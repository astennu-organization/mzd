<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;


// Home
Route::get('/',                 [HomeController::class, 'index'])->name('home.index');

// About Us
Route::get('/about',            [AboutController::class, 'index'])->name('about.index');
Route::get('/about/team',       [AboutController::class, 'team'])->name('about.team');
Route::get('/about/contact',    [AboutController::class, 'contact'])->name('about.contact');

// News
Route::get('/news',             [NewsController::class, 'index'])->name('news.index');

// Gallery
Route::get('/gallery',          [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/photos',   [GalleryController::class, 'photos'])->name('gallery.photos');
Route::get('/gallery/videos',   [GalleryController::class, 'videos'])->name('gallery.videos');

// Report
Route::get('/report',           [ReportController::class, 'index'])->name('report.index');

// Moderator
Route::get('/moderator',        [ModeratorController::class, 'index'])->name('moderator.index');
