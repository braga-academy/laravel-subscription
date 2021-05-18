<?php

use App\Http\Controllers\Subscriptions\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('subscriptios/checkout', [SubscriptionController::class, 'index'])->name('subscriptions.checkout');
Route::get('subscriptios/premium', [SubscriptionController::class, 'premium'])->name('subscriptions.premium');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
