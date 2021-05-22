<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteRequestController;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('home');

Route::get('/portfolio', function(){
    return view('portfolio', ['pageIdentifier' => 'portfolio']);
})->name('portfolio');

Route::get('/meet-the-machines', function(){
    return view('machines', ['pageIdentifier' => 'machines']);
})->name('machines');

Route::get('/request-quote', [QuoteRequestController::class, 'index'])->name('quote.index');
Route::post('/request-quote', [QuoteRequestController::class, 'store'])->name('quote.store');

Route::post('/send-message', [EmailController::class, 'send'])->name('email.send');

Route::middleware('auth')->group(function(){
    Route::get('/request/download/{quote}', [QuoteRequestController::class, 'download'])->name('quote.download');
});

require __DIR__ . '/auth.php';
