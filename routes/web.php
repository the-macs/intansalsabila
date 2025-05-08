<?php

use Illuminate\Support\Facades\Route;;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;

Route::get('/', [HomeController::class, 'index'])->name('fe.home');
Route::get('/contact', [ContactController::class, 'index'])->name('fe.contact');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('fe.about-us');

// Package Group
Route::get('/packages/hajj', [PackageController::class, 'indexHajj'])->name('fe.packages.hajj');
Route::get('/packages/umrah', [PackageController::class, 'indexUmrah'])->name('fe.packages.umrah');

// Activity Group - Article
Route::get('/activities/article', [ActivityController::class, 'indexArticle'])->name('fe.activities.article');
Route::get('/activities/article/{slug}', [ActivityController::class, 'showArticle'])->name('fe.activities.article-detail');

// Activity Group - Gallery
Route::get('/activities/gallery', [ActivityController::class, 'indexGallery'])->name('fe.activities.gallery');
Route::get('/activities/gallery/{gallery}', [ActivityController::class, 'showGallery'])->name('fe.activities.gallery-detail');

// Service Group
Route::get('/services/airline-ticket', [ServiceController::class, 'indexAirline'])->name('fe.services.airline-ticket');
Route::get('/services/hotel-voucher', [ServiceController::class, 'indexHotelVoucher'])->name('fe.services.hotel-voucher');
Route::get('/services/travel-document', [ServiceController::class, 'indexTravelDocument'])->name('fe.services.travel-document');
