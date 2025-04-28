<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TourPackageController;
use Illuminate\Support\Facades\Route;;

Route::get('/', fn() => view('pages.home'))->name('fe.home');
Route::get('/contact-us', fn() => view('pages.contact-us'))->name('fe.contact-us');
Route::get('/about-us', fn() => view('pages.about-us'))->name('fe.about-us');
Route::get('/packages/hajj', fn() => view('pages.packages.hajj', [
    'hajj_packages' => config('temporary.packages.hajj')
]))->name('fe.packages.hajj');
Route::get('/packages/umrah', fn() => view('pages.packages.umrah', [
    'umrah_packages' => config('temporary.packages.umrah')
]))->name('fe.packages.umrah');

Route::get('/tour-package', [TourPackageController::class, 'index'])->name('fe.tour-package');

Route::get('/activities/article', [ArticleController::class, 'index'])->name('fe.activities.article');


Route::get('/activities/gallery', [GalleryController::class, 'index'])->name('fe.activities.gallery');
Route::get('/activities/gallery/{gallery}', [GalleryController::class, 'show'])->name('fe.activities.gallery-detail');

Route::get('/services/airline-ticket', [ServiceController::class, 'showAirline'])->name('fe.services.airline-ticket');
Route::get('/services/hotel-voucher', [ServiceController::class, 'showHotelVoucher'])->name('fe.services.hotel-voucher');
Route::get('/services/travel-document', [ServiceController::class, 'showTravelDocument'])->name('fe.services.travel-document');
