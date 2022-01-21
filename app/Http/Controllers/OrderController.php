<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Plan;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::query()->where('user_id', auth()->user()->id);
        if (request('status')) {
            $orders->where('status', request('status'));
        }
        $orders = $orders->get();
        $pendiente = Order::where('status', 1)->where('user_id', auth()->user()->id)->count();
        $recibido = Order::where('status', 2)->where('user_id', auth()->user()->id)->count();
        $enviado = Order::where('status', 3)->where('user_id', auth()->user()->id)->count();
        $entregado = Order::where('status', 4)->where('user_id', auth()->user()->id)->count();
        $anulado = Order::where('status', 5)->where('user_id', auth()->user()->id)->count();

        return view('orders.index', compact('orders', 'pendiente', 'recibido', 'enviado', 'entregado', 'anulado'));
    }

    public function create(Request $request){
        $plan = Plan::find(session()->get('plan'));
        $total = 1;
        if (session()->get('divisa') == 'MXN') {
            $total = (Cart::instance('caja1')->total() + Cart::instance('caja2')->total() + Cart::instance('caja3')->total() + Cart::instance('caja4')->total())*$plan->MXN;
            $currency_value = $plan->MXN;
        }else{
            $total = (Cart::instance('caja1')->total() + Cart::instance('caja2')->total() + Cart::instance('caja3')->total() + Cart::instance('caja4')->total())*$plan->USD;
            $currency_value = $plan->USD;
        }
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'contact' => $request->name .' '. $request->last_name,
            'phone' => $request->phone,
            'bussines' => $request->bussines,
            'envio' => json_encode([
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'postal_code' => $request->postal_code,
            ]),
            'total' => $total,
            'plan_name' => $plan->name,
            'plan_id' => $plan->id,
            'currency' => session()->get('divisa'),
            'currency_value' => $currency_value,
            'message' => $request->message,

        ]);

        if (Cart::instance('caja1')->count()) {
            $order->boxes()->create([
                'content' => Cart::instance('caja1')->content()
            ]);
            Cart::instance('caja1')->destroy();
        }
        if (Cart::instance('caja2')->count()) {
            $order->boxes()->create([
                'content' => Cart::instance('caja2')->content()
            ]);
            Cart::instance('caja2')->destroy();
        }
        if (Cart::instance('caja3')->count()) {
            $order->boxes()->create([
                'content' => Cart::instance('caja3')->content()
            ]);
            Cart::instance('caja3')->destroy();
        }
        if (Cart::instance('caja4')->count()) {
            $order->boxes()->create([
                'content' => Cart::instance('caja4')->content()
            ]);
            Cart::instance('caja4')->destroy();
        }
        session()->forget('plan');

        return redirect()->route('profile.index');
    }



    public function show(Order $order)
    {
        $this->authorize('author', $order);
        $items = json_decode($order->content);
        $envio = json_decode($order->envio);
        return view('orders.show', compact('order', 'items','envio'));
    }

    public function pay(Order $order, Request $request)
    {
        $this->authorize('author', $order);
        $payment_id = $request->get('payment_id');
        $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id" . "?access_token=APP_USR-7164250922873689-110501-617c548ecb7d45ff8a8dcb40111fe4b6-1012887868");
        $response = json_decode($response);
        $status = $response->status;

        if ($status == 'approved') {
            $order->status = 2;
            $order->save();
        }

        return redirect()->route('orders.show', $order);
    }
}
