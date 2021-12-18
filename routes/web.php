<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WebhooksController;
use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\CreateOrder;
use App\Http\Livewire\PaymentOrder;
use App\Http\Livewire\ShoppingCart;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', WelcomeController::class);
Route::get('/', function(){
    return view('rewear.index');
});
Route::get('/nosotros', function(){
    return view('rewear.nosotros');
});
Route::get('search', SearchController::class)->name('search');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');

Route::middleware(['auth'])->group(function () {
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/create', CreateOrder::class)->name('orders.create');
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('orders/{order}/payment', PaymentOrder::class)->name('orders.payment');
    /* Route::get('orders/{order}/payment', [OrderController::class, 'payment'])->name('orders.payment'); */
    Route::get('orders/{order}/pay', [OrderController::class, 'pay'])->name('orders.pay');
});

Route::post('webhooks', WebhooksController::class);


/* Route::get('prueba', function () {
    $hora = now()->subMinute(10);
    $orders = Order::where('status', 1)->whereTime('created_at', '<=', $hora)->get();
    foreach ($orders as $order) {
        $items = json_decode($order->content);

        foreach ($items as $item) {
            increase($item);
        }
        $order->status = 5;
        $order->save();
    }
    return "se realizo con exito";
}); */
