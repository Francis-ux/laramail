<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApiSubscriptionController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/mail', [MailController::class, 'mail'])->name('mail');

    Route::post('/send-interserver-mail', [MailController::class, 'sendInterserverMail'])->name('send-interserver-mail');

    Route::post('/send-api-subscription-mail', [MailController::class, 'sendApiSubscriptionMail'])->name('send-api-subscription-mail');

    Route::post('/send-fake-data-mail', [MailController::class, 'sendFakeDataMail'])->name('send-fake-data-mail');

    Route::post('/send-plain-email', [MailController::class, 'sendPlainMail'])->name('send-plain-email');
});

require __DIR__ . '/auth.php';
