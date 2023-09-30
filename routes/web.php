<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

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

Route::get('', [CategoryController::class, 'home'])->name('home');
Route::get('products/{id}', [CategoryController::class,'products'])->name('products');
Route::get('/productdetail/{id}', [CategoryController::class,'productdetail'])->name('productdetail');
Route::get('/cart/{id}', [CategoryController::class,'addcart'])->name('addcart');
Route::get('delete/{id}', [CategoryController::class,'deletecart'])->name('deletecart');
Route::get('/cart', [CategoryController::class,'cart'])->name('cart');


Route::post('/stripe/payment', [StripeController::class, 'payment'])->name('stripe');
Route::get('/stripe/success', 'StripePaymentController@success')->name('stripe_success');
Route::get('/stripe/cancel', 'StripePaymentController@cancel')->name('stripe_cancel');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/customization', function () {
    return view('pages.customization');
})->name('customization');
Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');
// Route::get('/productdetail', function () {
//     return view('pages.productdetail');
// })->name('productdetail');
// Route::get('/products', function () {
//     return view('pages.products');
// })->name('products');
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
Route::get('/register', function () {
    return view('pages.register');
})->name('register');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
// add the routes that user can not access whitout login here


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
