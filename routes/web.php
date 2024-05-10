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
use App\Http\Controllers\Guide2Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AboutUsImageController;
use App\Http\Controllers\BannerImageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InformationImageController;
use App\Http\Controllers\HomeOverviewController;
use App\Http\Controllers\HomeOverviewImageController;
use App\Http\Controllers\ContactAdminController;

use App\Models\User;
use Illuminate\Contracts\Auth\UserProvider;


Route::get('/', function () {
    return view('layout/Homepage');
});
///
Route::get('/tickets/get', [TicketController::class, 'ticketsGet'])->name('tickets.get');
Route::get('/contact', [ContactController::class, 'contactView'])->name('contact.view');
Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submit.form');
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
Route::post('/Animals/view', [AnimalsController::class, 'animalsView'])->name('animals.infor.view');
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
    Route::get('/contactAdmin', [ContactAdminController::class, 'index'])->name('contact.contactAdmin');
    Route::get('/news/update', [NewsController::class, 'updateNews'])->name('news.update');
    Route::get('/news/edit/{id}', [NewsController::class, 'editNews'])->name('news.edit');
    Route::get('/bill', [BillController::class, 'view'])->name('bill.view');
    Route::get('/bill/filter', [BillController::class, 'filter'])->name('bill.filter');
    Route::get('/animals/upload', [AnimalsController::class, 'animalsUpload'])->name('animals.upload');
    Route::get('/animals/update', [AnimalsController::class, 'animalsUpdate'])->name('animals.update');
    Route::get('/animals/delete', [AnimalsController::class, 'animalsDelete'])->name('animals.infor.delete');
    Route::get('/animals/edit', [AnimalsController::class, 'animalsEdit'])->name('animal.infor.edit');
    Route::get('/user', [UserController::class, 'view'])->name('user.view');
    Route::post('/user/delete', [UserController::class, 'userDelete'])->name('user.delete');
    Route::get('/user/edit', [UserController::class, 'userEdit'])->name('user.edit');
    Route::post('/user/update', [UserController::class, 'userUpdate'])->name('user.handle.update');
    Route::delete('/news/delete/{id}', [NewsController::class, 'deleteNews'])->name('news.delete');
    Route::post('/news/handle/upload', [NewsController::class, 'handleUploadNews'])->name('handle.upload.news');
    Route::post('/news/handle', [NewsController::class, 'newsHandle'])->name('news.handle');
    Route::post('/animals/handle/upload', [AnimalsController::class, 'handleUploadAnimals'])->name('handle.upload.animals');
    Route::post('/animals/handle', [AnimalsController::class, 'animalsHandle'])->name('animals.handle');
    Route::get('/animals-edit/{id}', [AnimalsController::class, 'animalsEditSubmit'])->name('animals.edit.submit');
    Route::post('/news-submit', [NewsController::class, 'handleEditNews'])->name('news.edit.submit');
    Route::get('/booking/detail/{id}', [BillController::class, 'bookingDetail'])->name('booking.detail');
    Route::get('/detail-confirm/{id}', [BillController::class, 'detailConfirm'])->name('detail.confirm');
    Route::get('/animal/update', [AnimalsController::class, 'animalsUpdate'])->name('animals.update');
    Route::post('/animal/delete', [AnimalsController::class, 'animalsDelete'])->name('animals.infor.delete');
    Route::get('/animal/edit/{id}', [AnimalsController::class, 'animalsEdit'])->name('animal.infor.edit');

    // Route::get('/', [BannerController::class, 'index'])->name('Homepage');
    
    Route::get('/banner/upload', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/banner', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/banner/edit', [BannerController::class, 'edit'])->name('banner.edit');
    Route::put('/banner/{banner}', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('/banner/{banner}', [BannerController::class, 'destroy'])->name('banner.destroy');

    Route::get('/information/create', [InformationController::class, 'create'])->name('information.create');
    Route::post('/information', [InformationController::class, 'store'])->name('information.store');
    Route::get('/information/edit', [InformationController::class, 'edit'])->name('information.edit');
    Route::put('/information/{information}', [InformationController::class, 'update'])->name('information.update');
    Route::delete('/information/{information}', [InformationController::class, 'destroy'])->name('information.destroy');

    Route::get('/overview/create', [HomeOverviewController::class, 'create'])->name('overview.create');
    Route::post('/overview', [HomeOverviewController::class, 'store'])->name('overview.store');
    Route::get('/overview/edit', [HomeOverviewController::class, 'edit'])->name('overview.edit');
    Route::put('/overview/{overview}', [HomeOverviewController::class, 'update'])->name('overview.update');
    Route::delete('/overview/{overview}', [HomeOverviewController::class, 'destroy'])->name('overview.destroy');
});
////////////