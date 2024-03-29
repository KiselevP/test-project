<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about ');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/allMessages/{id}',
    [ContactController::class, 'showOneMessage'])
        ->name('contact-data-one');

Route::get('/contact/allMessages/{id}/update',
    [ContactController::class, 'updateMessage'])
    ->name('contact-update');

Route::post('/contact/allMessages/{id}/update',
    [ContactController::class, 'updateMessageSubmit'])
    ->name('contact-update-submit');

Route::get('/contact/allMessages/{id}/delete',
    [ContactController::class, 'deleteMessage'])
    ->name('contact-delete');

Route::get('/contact/allMessages',
    [ContactController::class, 'allData'])
    ->name('contact-data');

Route::post('/contact/submit',
    [ContactController::class, 'submit'])
    ->name('contact-form');
