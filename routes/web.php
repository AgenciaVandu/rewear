<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WebhooksController;
use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\CreateOrder;
use App\Http\Livewire\PaymentOrder;
use App\Http\Livewire\ShoppingCart;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
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
Route::get('/divisas/{divisa}',[PageController::class,'setDivisas'])->name('divisas');

Route::get('/plan/{plan}', [PageController::class,'setPlan'])->name('plan');
Route::middleware('auth')->get('/planes', [PlanController::class,'index'])->name('planes');
//catalogo
Route::get('/catalogo-rewear/{color?}', [CatalogueController::class,'index'])->name('catalogue.index');
//detalle de producto
Route::get('/catalogo-producto/{product}',[CatalogueController::class,'product'])->name('catalogue.product');
//Carrito / cesta
Route::get('/cesta',[CartController::class,'index'])->name('cart.index');

Route::get('/comprar', [PageController::class,'checkout'])->name('checkout');
//Preguntas frecuentes
Route::get('/faq', [PageController::class,'faq'])->name('faq');
//Página del blog
Route::get('/blog-index', [BlogController::class,'index'])->name('blog.index');
//pagina de articulo
Route::get('/blog-articulo/{post}', [BlogController::class,'show'])->name('post.show');
//pagina de contacto
Route::get('/contacto', [PageController::class,'contact'])->name('contact');
// COMIENZAN LAS VISTAS DE USUARIO
//pagina de login
/* Route::get('/login', function(){
    return view('auth.login');
}); */
//pagina de registro
/* Route::get('/register', function(){
    return view('rewear.user.register');
}); */
//pagina de cuenta
Route::middleware(['auth'])->get('/mi-perfil', [ClientController::class,'index'])->name('profile.index');
Route::middleware(['auth'])->put('/mi-perfil/update', [ClientController::class,'updateInfo'])->name('profile.updateInfo');
Route::middleware(['auth'])->post('/updatePassword', [ClientController::class, 'updatePassword'])->name('user.update.password');
Route::middleware(['auth'])->post('/updateAddres/{address}', [ClientController::class, 'updateAddress'])->name('user.update.address');
Route::middleware(['auth'])->delete('/deleteAddres/{address}', [ClientController::class, 'deleteAddress'])->name('user.delete.address');

Route::get('locale/{locale}',function($locale){
    session()->put('locale',$locale);
    return Redirect::back();
})->name('set.lang');

Route::get('search', SearchController::class)->name('search');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');

Route::middleware(['auth'])->group(function () {
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('orders/create', [OrderController::class,'create'])->name('orders.create');
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('orders/{order}/payment', PaymentOrder::class)->name('orders.payment');
    /* Route::get('orders/{order}/payment', [OrderController::class, 'payment'])->name('orders.payment'); */
    Route::get('orders/{order}/pay', [OrderController::class, 'pay'])->name('orders.pay');
});

Route::post('webhooks', WebhooksController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


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
