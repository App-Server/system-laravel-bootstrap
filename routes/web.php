<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterProduct;
use App\Http\Controllers\Order;
use App\Http\Controllers\Customer;
use App\Http\Controllers\CustomerSearch;
use App\Http\Controllers\Employees;
use App\Http\Controllers\ServiceOrder;
use App\Http\Controllers\ServiceRegistration;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\Relationships\CommentController;
use App\Http\Controllers\ServiceOrderRelaionships\ServiceOrderComment;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderSearch;
use App\Http\Controllers\ServiceOrderSearch;
use App\Http\Controllers\RelationshipsStockEntry\StockEntry;
use App\Http\Controllers\RelationshipsStockOutput\StockOutput;
use App\Http\Controllers\Controller\Relationships;
use App\Http\Controllers\CustomerList;

Route::middleware(['auth'])->group(function () {
    //--------------------------------------------------------------------------------------------------------
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard.index');
    //--------------------------------------------------------------------------------------------------------
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}', [UserController::class, 'show'])->name('user.details');
    //--------------------------------------------------------------------------------------------------------
    Route::delete('/order/{id}', [Order::class, 'destroy'])->name('order.destroy');
    Route::put('/order/{id}', [Order::class, 'update'])->name('order.update');
    Route::get('/order/{id}/edit', [Order::class, 'edit'])->name('order.edit');
    Route::get('/order', [Order::class, 'index'])->name('order.index');
    Route::get('/order/create', [Order::class, 'create'])->name('order.create');
    Route::post('/order', [Order::class, 'store'])->name('order.store');
    Route::get('/order/{id}', [Order::class, 'show'])->name('order.details');
    //---------------------------------------------------------------------------------------------------------
    Route::delete('/register-product/{id}', [RegisterProduct::class, 'destroy'])->name('register-product.destroy');
    Route::put('/register-product/{id}', [RegisterProduct::class, 'update'])->name('register-product.update');
    Route::get('/register-product/{id}/edit', [RegisterProduct::class, 'edit'])->name('register-product.edit');
    Route::get('/register-product', [RegisterProduct::class, 'index'])->name('register-product.index');
    Route::get('/register-product/create', [RegisterProduct::class, 'create'])->name('register-product.create');
    Route::post('/register-product', [RegisterProduct::class, 'store'])->name('register-product.store');
    Route::get('/register-product/{id}', [RegisterProduct::class, 'show'])->name('register-product.details');
    //--------------------------------------------------------------------------------------------------------
    Route::delete('/customer/{id}', [Customer::class, 'destroy'])->name('customer.destroy');
    Route::put('/customer/{id}', [Customer::class, 'update'])->name('customer.update');
    Route::get('/customer/{id}/edit', [Customer::class, 'edit'])->name('customer.edit');
    Route::get('/customer', [Customer::class, 'index'])->name('customer.index');
    Route::get('/customer/create', [Customer::class, 'create'])->name('customer.create');
    Route::post('/customer', [Customer::class, 'store'])->name('customer.store');
    Route::get('/customer/{id}', [Customer::class, 'show'])->name('customer.details');
    //---------------------------------------------------------------------------------------------------------
    Route::delete('/employees/{id}', [Employees::class, 'destroy'])->name('employees.destroy');
    Route::put('/employees/{id}', [Employees::class, 'update'])->name('employees.update');
    Route::get('/employees/{id}/edit', [Employees::class, 'edit'])->name('employees.edit');
    Route::get('/employees', [Employees::class, 'index'])->name('employees.index');
    Route::get('/employees/create', [Employees::class, 'create'])->name('employees.create');
    Route::post('/employees', [Employees::class, 'store'])->name('employees.store');
    Route::get('/employees/{id}', [Employees::class, 'show'])->name('employees.details');
    //---------------------------------------------------------------------------------------------------------
    Route::delete('/service-order/{id}', [ServiceOrder::class, 'destroy'])->name('service-order.destroy');
    Route::put('/service-order/{id}', [ServiceOrder::class, 'update'])->name('service-order.update');
    Route::get('/service-order/{id}/edit', [ServiceOrder::class, 'edit'])->name('service-order.edit');
    Route::get('/service-order', [ServiceOrder::class, 'index'])->name('service-order.index');
    Route::get('/service-order/create', [ServiceOrder::class, 'create'])->name('service-order.create');
    Route::post('/service-order', [ServiceOrder::class, 'store'])->name('service-order.store');
    Route::get('/service-order/{id}', [ServiceOrder::class, 'show'])->name('service-order.details');
    //---------------------------------------------------------------------------------------------------------
    Route::delete('/service-registration/{id}', [ServiceRegistration::class, 'destroy'])->name('service-registration.destroy');
    Route::put('/service-registration/{id}', [ServiceRegistration::class, 'update'])->name('service-registration.update');
    Route::get('/service-registration/{id}/edit', [ServiceRegistration::class, 'edit'])->name('service-registration.edit');
    Route::get('/service-registration', [ServiceRegistration::class, 'index'])->name('service-registration.index');
    Route::get('/service-registration/create', [ServiceRegistration::class, 'create'])->name('service-registration.create');
    Route::post('/service-registration', [ServiceRegistration::class, 'store'])->name('service-registration.store');
    Route::get('/service-registration/{id}', [ServiceRegistration::class, 'show'])->name('service-registration.details');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/order/{id}/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::post('/order/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/service-order/{id}/service-order-comments', [ServiceOrderComment::class, 'index'])->name('service-order-comments.index');
    Route::post('/service-order/{id}/service-order-comments', [ServiceOrderComment::class, 'store'])->name('service-order-comments.store');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/setting', function () {return view('setting.index');});
    //---------------------------------------------------------------------------------------------------------
    Route::get('/customer-search', [CustomerSearch::class, 'index'])->name('customer-search.index');
    Route::post('/customer-search', [CustomerSearch::class, 'search'])->name('customer-search.search');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/service-order-search', [ServiceOrderSearch::class, 'index'])->name('service-order-search.index');
    Route::post('/service-order-search', [ServiceOrderSearch::class, 'search'])->name('service-order-search.search');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/order-search', [OrderSearch::class, 'index'])->name('order-search.index');
    Route::post('/order-search', [OrderSearch::class, 'search'])->name('order-search.search');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/stock-entry', [StockEntry::class, 'index'])->name('stock-entry.index');
    // Route::post('/service-order/{id}/service-order-comments', [ServiceOrderComment::class, 'store'])->name('service-order-comments.store');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/stock-output', [StockOutput::class, 'index'])->name('stock-output.index');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/order-search', [OrderSearch::class, 'index'])->name('order-search.index');
    //---------------------------------------------------------------------------------------------------------
    Route::get('/customer-list', [CustomerList::class, 'index'])->name('customer-list.index');
});

// Login route
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/', function () {
    return view('login.index');
});