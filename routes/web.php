<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('layout/Homepage');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'HandleLogin'])->name('login.edit');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'HandleRegister'])->name('register.edit');
Route::get('/logout', [LoginController::class, 'HandleLogout'])->name('logout');
Route::get('/news', [NewsController::class, 'news'])->name('news.view');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.view');
Route::get('/cart', [CartController::class, 'cartView'])->name('cart.view');
Route::get('/tickets/view', [TicketController::class, 'ticketview'])->name('ticket.view');
Route::get('/tickets', [TicketController::class, 'ticket'])->name('ticket');
Route::get('/contact', [ContactController::class, 'contactView'])->name('contact.view');
Route::post('/news/read/', [ReadController::class, 'newsRead'])->name('news.read');
Route::Post('/tickets', [TicketController::class, 'BuyTicket'])->name('tickets.buy');
Route::Post('/tickets/', [TicketController::class, 'BuyTicket'])->name('tickets.buy');
Route::Post('/handle/contact', [ContactController::class, 'HandleContact'])->name('handle.contact');

// Các route của trang admin viết ở trong đây//////
Route::middleware('auth.admin')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/news/upload', [NewsController::class, 'uploadNews'])->name('news.upload');
    Route::post('/news/handle/upload', [NewsController::class, 'handleUploadNews'])->name('handle.upload.news');
});
////////////