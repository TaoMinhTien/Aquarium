<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CoralReefController;
use App\Http\Controllers\DolphinController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\FishesController;
use App\Http\Controllers\KelpForestController;
use App\Http\Controllers\MangroveSwampController;
use App\Http\Controllers\OctopusController;
use App\Http\Controllers\OpenOceanController;
use App\Http\Controllers\SeaTurtleController;
use App\Http\Controllers\SharkController;
use App\Http\Controllers\Guide1Controller;
use App\Http\Controllers\Guide2Controller;
use App\Http\Controllers\UserController;
use App\Models\User;


Route::get('/', function () {
    return view('layout/Homepage');
});

///

Route::get('/tickets/get', [TicketController::class, 'ticketsGet'])->name('tickets.get');
Route::get('/contact', [ContactController::class, 'contactView'])->name('contact.view');
Route::post('/news/read/{id}', [ReadController::class, 'newsRead'])->name('news.read');
Route::get('/news/read/{id}', [ReadController::class, 'newsRead'])->name('news.read');
Route::post('/news/detail/{id}', [ReadController::class, 'detailRead'])->name('detail.read');
Route::post('/detail/read', [ReadController::class, 'readDetail'])->name('read.detail');
Route::Post('/tickets/buy', [TicketController::class, 'BuyTicket'])->name('tickets.buy');
Route::Post('/handle/contact', [ContactController::class, 'HandleContact'])->name('handle.contact');
Route::get('/error', [DashboardController::class, 'errorPage'])->name('error');
Route::get('/cart-quantity', [CartController::class, 'cartQuantity'])->name('cart.quantity');
Route::get('/cart-get-totalitems', [CartController::class, 'getTotalItems'])->name('gettotalitems');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback-post', [FeedbackController::class, 'handleFeedback'])->name('feedback.post');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/animals', [AnimalsController::class, 'index'])->name('animals');
Route::get('/overview', [OverviewController::class, 'index'])->name('overview');
Route::get('/fishes', [FishesController::class, 'index'])->name('fishes');
Route::get('/openocean', [OpenOceanController::class, 'index'])->name('openocean');
Route::get('/coralreef', [CoralReefController::class, 'index'])->name('coralreef');
Route::get('/shark', [SharkController::class, 'index'])->name('shark');
Route::get('/octopus', [OctopusController::class, 'index'])->name('octopus');
Route::get('/mangroveswamp', [MangroveSwampController::class, 'index'])->name('mangroveswamp');
Route::get('/seaturtle', [SeaTurtleController::class, 'index'])->name('seaturtle');
Route::get('/kelpforest', [KelpForestController::class, 'index'])->name('kelpforest');
Route::get('/dolphin', [DolphinController::class, 'index'])->name('dolphin');
Route::get('/guide1', [Guide1Controller::class, 'index'])->name('guide1');
Route::get('/guide2', [Guide2Controller::class, 'index'])->name('guide2');
Route::post('/login', [LoginController::class, 'HandleLogin'])->name('login.edit');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'HandleRegister'])->name('register.edit');
Route::get('/logout', [LoginController::class, 'HandleLogout'])->name('logout');
Route::get('/news', [NewsController::class, 'news'])->name('news.view');
Route::get('/get-news', [NewsController::class, 'getNews'])->name('get.news');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.view');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
Route::post('/handle-checkout', [CheckoutController::class, 'handleCheckout'])->name('handlecheckout.checkout');
Route::get('/cart', [CartController::class, 'cartView'])->name('cart.view');
Route::post('/cart/add', [CartController::class, 'handleAddCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'cartRemove'])->name('cart.remove');
Route::post('/cart/upload-quantity', [CartController::class, 'uploadQuantity'])->name('cart.update.quantity');
Route::get('/cart/update-total', [CartController::class, 'updateTotalInCart'])->name('update.total.cart');
Route::post('/tickets/view', [TicketController::class, 'ticketview'])->name('ticket.view');
Route::get('/tickets/view', [TicketController::class, 'ticketview'])->name('ticket.view');
Route::get('/tickets/stock', [TicketController::class, 'checkStock'])->name('checkStock');
Route::get('/tickets', [TicketController::class, 'tickets'])->name('tickets');



Route::get('/tickets/get', [TicketController::class, 'ticketsGet'])->name('tickets.get');
Route::post('/news/read/{id}', [ReadController::class, 'newsRead'])->name('news.read');
Route::get('/news/read/{id}', [ReadController::class, 'newsRead'])->name('news.read');
Route::post('/news/detail/{id}', [ReadController::class, 'detailRead'])->name('detail.read');
Route::post('/detail/read', [ReadController::class, 'readDetail'])->name('read.detail');
Route::Post('/tickets/buy', [TicketController::class, 'BuyTicket'])->name('tickets.buy');
Route::Post('/handle/contact', [ContactController::class, 'HandleContact'])->name('handle.contact');
Route::get('/error', [DashboardController::class, 'errorPage'])->name('error');
Route::get('/test', [InformationController::class, 'index'])->name('test');

// Các route của trang admin viết ở trong đây//////
Route::middleware('auth.admin')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/news/upload', [NewsController::class, 'uploadNews'])->name('news.upload');
    Route::get('/news/update', [NewsController::class, 'updateNews'])->name('news.update');
    Route::get('/news/edit/{id}', [NewsController::class, 'editNews'])->name('news.edit');
    Route::get('/bill', [BillController::class, 'view'])->name('bill.view');
    Route::delete('/news/delete/{id}', [NewsController::class, 'deleteNews'])->name('news.delete');
    Route::post('/news/handle/upload', [NewsController::class, 'handleUploadNews'])->name('handle.upload.news');
    Route::post('/news/handle', [NewsController::class, 'newsHandle'])->name('news.handle');
    Route::post('/news-submit', [NewsController::class, 'handleEditNews'])->name('news.edit.submit');
    Route::post('/booking/detail', [BillController::class, 'bookingDetail'])->name('booking.detail');
    Route::post('/detail-confirm', [BillController::class, 'detailConfirm'])->name('detail.confirm');
});
////////////