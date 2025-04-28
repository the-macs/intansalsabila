<?php

use App\Http\Controllers\GalleryController;
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


Route::get('/activities/article', fn() => view('pages.activities.article', []))->name('fe.activities.article');


Route::get('/activities/gallery', [GalleryController::class, 'index'])->name('fe.activities.gallery');
Route::get('/activities/gallery/{gallery}', [GalleryController::class, 'show'])->name('fe.activities.gallery-detail');

Route::get('/services/airline-ticket', fn() => view('pages.services.airline-ticket'))->name('fe.services.airline-ticket');
