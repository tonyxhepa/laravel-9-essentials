<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\WelcomeController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::resource('/posts', PostController::class)->middleware(['auth', 'is_admin']);
Route::resource('/tags', TagController::class)->middleware(['auth', 'is_admin']);

// Route::get('/contact', function () {
//     Mail::to('test@email.com')->send(new TestMail());
// });

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
