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

// Route for Itching page
Route::get('/itching', [App\Http\Controllers\PageController::class, 'itching'])->name('itching');
// Route for hives page
route::get('/hives', [App\Http\Controllers\PageController::class, 'hives'])->name('hives');
// Route for sneezing page
route::get('/sneezing', [App\Http\Controllers\PageController::class, 'sneezing'])->name('sneezing');
// Route for wheezing page
route::get('/wheezing', [App\Http\Controllers\PageController::class, 'wheezing'])->name('wheezing');
// Route for swollenlips page
route::get('/swollenlips', [App\Http\Controllers\PageController::class, 'swollenlips'])->name('swollenlips');
// Route for shortnessbreath page
route::get('/shortnessbreath', [App\Http\Controllers\PageController::class, 'shortnessbreath'])->name('shortnessbreath');
//Route for chesttight page
route::get('/chesttight', [App\Http\Controllers\PageController::class, 'chesttight'])->name('chesttight');
//Route for runnynose page
route::get('/runnynose', [App\Http\Controllers\PageController::class, 'runnynose'])->name('runnynose');
//Route for swollenface page
route::get('/swollenface', [App\Http\Controllers\PageController::class, 'swollenface'])->name('swollenface');
//Route for skinrashes page
route::get('/skinrashes', [App\Http\Controllers\PageController::class, 'skinrashes'])->name('skinrashes');
//Route for swolleneye page
route::get('/swolleneye', [App\Http\Controllers\PageController::class, 'swolleneye'])->name('swolleneye');
//Route for cough page
route::get('/cough', [App\Http\Controllers\PageController::class, 'cough'])->name('cough');

//route for allergysymptoms page
route::get('/allergysymptoms', [App\Http\Controllers\PageController::class, 'allergysymptoms'])->name('allergysymptoms');
