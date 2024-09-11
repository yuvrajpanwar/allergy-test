<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/send-contact-form', [ContactController::class, 'sendContactForm'])->name('send-contact-form');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/success', function () {
    // if(session('success')){
        return view('success');
    // }
    return redirect('/');
})->name('success');