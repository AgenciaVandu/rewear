<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
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
//index
Route::get('/', [PageController::class,'index'])->name('home.index');
//nosotros
Route::get('/nosotros', [PageController::class,'about'])->name('about');
//catalogo
Route::get('/catalogo-rewear', [CatalogueController::class,'index'])->name('catalogue.index');
//detalle de producto
Route::get('/catalogo-producto/{product}',[CatalogueController::class,'product'])->name('catalogue.product');
//Carrito / cesta
Route::get('/cesta', function(){
    return view('rewear.catalogo.cart');
});
//Carrito / vacio
Route::get('/cesta-vacia', function(){
    return view('rewear.catalogo.empty-cart');
});
Route::get('/comprar', function(){
    return view('rewear.catalogo.purchase');
});
//Preguntas frecuentes
Route::get('/faq', [PageController::class,'faq'])->name('faq');
//Página del blog
Route::get('/blog-index', [BlogController::class,'index'])->name('blog.index');
//pagina de articulo
Route::get('/blog-articulo', function(){
    return view('rewear.blog.articulo');
});
//pagina de contacto
Route::get('/contacto', [PageController::class,'contact'])->name('contact');
// COMIENZAN LAS VISTAS DE USUARIO
//pagina de login
/* Route::get('/login', function(){
    return view('rewear.user.login');
}); */
//pagina de registro
/* Route::get('/register', function(){
    return view('rewear.user.register');
}); */
//pagina de cuenta
Route::get('/mi-perfil', function(){
    return view('rewear.user.cuenta.user');
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
