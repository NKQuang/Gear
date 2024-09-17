<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingController;

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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/technology', function () {
    return view('technology');
})->name('technology');
Route::get('/pro', function () {
    return view('products');
})->name('pro');
/*Route::get('/blog', function () {
    return view('blog');
})->name('blog');*/

Route::get('/listproduct', [ProductController::class, 'getdata'])->name('listproduct');



Route::get('/productdetail/{id}', [ProductController::class, 'showdetail'])->name('productdetail');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');


Route::get('/dashboard', function () {
    return view('admin.layout');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('products', ProductController::class);
    Route::resource('product-types', ProductTypeController::class);
    Route::resource('news', NewsController::class);
    Route::get('/feedback', [ContactController::class, 'index'])->name('admin.feedback');
});
require __DIR__ . '/auth.php';
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('blog', [NewsController::class, 'publicIndex'])->name('blog');
Route::get('blog/{id}', [NewsController::class, 'publicShow'])->name('blogdetail');
Route::get('/settings', [SettingController::class, 'index'])->name('settings');

Route::post('/update-exchange-rate', [SettingController::class, 'updateExchangeRate'])->name('update.exchange.rate');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
