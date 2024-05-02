<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\NewsController;
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
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
Route::post('/handle-checkout', [CheckoutController::class, 'handleCheckout'])->name('handlecheckout.checkout');
Route::get('/cart', [CartController::class, 'cartView'])->name('cart.view');
Route::post('/cart/add', [CartController::class, 'handleAddCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'cartRemove'])->name('cart.remove');
Route::post('/cart/upload-quantity', [CartController::class, 'uploadQuantity'])->name('cart.update.quantity');
Route::get('/cart/update-total', [CartController::class, 'updateTotalInCart'])->name('update.total.cart');
Route::post('/tickets/view', [TicketController::class, 'ticketview'])->name('ticket.view');
Route::get('/tickets/stock', [TicketController::class, 'checkStock'])->name('checkStock');
Route::get('/tickets', [TicketController::class, 'tickets'])->name('tickets');
Route::get('/tickets/get', [TicketController::class, 'ticketsGet'])->name('tickets.get');
Route::get('/contact', [ContactController::class, 'contactView'])->name('contact.view');
Route::post('/news/read/{id}', [ReadController::class, 'newsRead'])->name('news.read');
Route::get('/news/read/{id}', [ReadController::class, 'newsRead'])->name('news.read');
Route::post('/news/detail/{id}', [ReadController::class, 'detailRead'])->name('detail.read');
Route::post('/detail/read', [ReadController::class, 'readDetail'])->name('read.detail');
Route::Post('/tickets/buy', [TicketController::class, 'BuyTicket'])->name('tickets.buy');
Route::Post('/handle/contact', [ContactController::class, 'HandleContact'])->name('handle.contact');
Route::get('/error', [DashboardController::class, 'errorPage'])->name('error');

// Các route của trang admin viết ở trong đây//////
Route::middleware('auth.admin')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/news/upload', [NewsController::class, 'uploadNews'])->name('news.upload');
    Route::get('/news/update', [NewsController::class, 'updateNews'])->name('news.update');
    Route::get('/news/edit/{id}', [NewsController::class, 'editNews'])->name('news.edit');
    Route::delete('/news/delete/{id}', [NewsController::class, 'deleteNews'])->name('news.delete');
    Route::post('/news/handle/upload', [NewsController::class, 'handleUploadNews'])->name('handle.upload.news');
    Route::post('/news/handle', [NewsController::class, 'newsHandle'])->name('news.handle');
    Route::post('/news-submit', [NewsController::class, 'handleEditNews'])->name('news.edit.submit');
});
////////////