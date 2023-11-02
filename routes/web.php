<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [CategoryController::class, 'home'])->name('home');
Route::get('products/{id}', [CategoryController::class,'products'])->name('products');
Route::get('/productdetail/{id}', [CategoryController::class,'productdetail'])->name('productdetail');
Route::get('/cart/{id}', [CartController::class,'store'])->name('addcart');
Route::get('delete/{id}', [CartController::class,'destroy'])->name('deletecart');
Route::get('/cart', [CartController::class,'index'])->name('cart');
Route::get('checkout', [ShipmentController::class,'index'])->middleware(['auth','verified'])->name('checkout');
Route::post('checkout', [ShipmentController::class,'store'])->name('checkout.store');


Route::post('/stripe/payment', [StripeController::class, 'payment'])->name('stripe');
Route::get('/stripe/success', [StripeController::class, 'success'])->name('stripe_success');
Route::get('/stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel');
// Route::post('/stripe/success', 'StripePaymentController@success')->name('stripe_success');
// Route::get('/stripe/cancel', 'StripePaymentController@cancel')->name('stripe_cancel');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');
// Route::get('/checkout', function () {
//     return view('pages.checkout');
// })->name('checkout');
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






Route::resource('admins', AdminsController::class);
Route::resource('users', UsersController::class);
Route::resource('products', ProductsController::class);
Route::resource('categories', CategoriesController::class);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
// add the routes that user can not access whitout login here

Route::get('/tables', function () {
    return view('dashboard.tables');
})->name('tables');
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
