<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ContactController;

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
    return view('layout/Homepage');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'HandleLogin'])->name('login.edit');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'HandleRegister'])->name('register.edit');
Route::get('/logout', [LoginController::class, 'HandleLogout'])->name('logout');
Route::get('/news', [NewsController::class, 'news'])->name('news.view');
Route::post('/news/read/', [ReadController::class, 'newsRead'])->name('news.read');
Route::Post('/tickets', [TicketController::class, 'BuyTicket'])->name('tickets.buy');
Route::Post('/handle/contact', [ContactController::class, 'HandleContact'])->name('handle.contact');



// Các route của trang admin viết ở trong đây//////
Route::middleware('auth.admin')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
});
////////////