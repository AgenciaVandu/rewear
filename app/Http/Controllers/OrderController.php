<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use \PDF;

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
        $mon = 'MXN';
        $mon1 = 'MXN';
        $mon2 = 'MXN';
        $mon3 = 'MXN';
        $mon4 = 'MXN';

        if (Cart::instance('caja1')->count()) {
            foreach (Cart::instance('caja1')->content() as $item) {
                $manga1 = $item->model->subcategory->name;
            }
            if ($manga1 == 'Corta' || $manga1 == 'corta') {
                switch (session()->get('divisa')) {
                    case 'MXN':
                        $mon1 = 'MXN';
                        break;
                    case 'USD':
                        $mon1 = 'USD';
                        break;
                    case '':
                        $mon1 = 'MXN';
                        break;
                }
            } else {
                switch (session()->get('divisa')) {
                    case 'MXN':
                        $mon1 = 'MXN_L';
                        break;
                    case 'USD':
                        $mon1 = 'USD_L';
                        break;
                    case '':
                        $mon1 = 'MXN_L';
                        break;
                }
            }
        }
        if (Cart::instance('caja2')->count()) {
            foreach (Cart::instance('caja2')->content() as $item) {
                $manga2 = $item->model->subcategory->name;
            }
            if ($manga2 == 'Corta' || $manga2 == 'corta') {
                switch (session()->get('divisa')) {
                    case 'MXN':
                        $mon2 = 'MXN';
                        break;
                    case 'USD':
                        $mon2 = 'USD';
                        break;
                    case '':
                        $mon2 = 'MXN';
                        break;
                }
            } else {
                switch (session()->get('divisa')) {
                    case 'MXN':
                        $mon2 = 'MXN_L';
                        break;
                    case 'USD':
                        $mon2 = 'USD_L';
                        break;
                    case '':
                        $mon2 = 'MXN_L';
                        break;
                }
            }
        }
        if (Cart::instance('caja3')->count()) {
            foreach (Cart::instance('caja3')->content() as $item) {
                $manga3 = $item->model->subcategory->name;
            }
            if ($manga3 == 'Corta' || $manga3 == 'corta') {
                switch (session()->get('divisa')) {
                    case 'MXN':
                        $mon3 = 'MXN';
                        break;
                    case 'USD':
                        $mon3 = 'USD';
                        break;
                    case '':
                        $mon3 = 'MXN';
                        break;
                }
            } else {
                switch (session()->get('divisa')) {
                    case 'MXN':
                        $mon3 = 'MXN_L';
                        break;
                    case 'USD':
                        $mon3 = 'USD_L';
                        break;
                    case '':
                        $mon3 = 'MXN_L';
                        break;
                }
            }
        }
        if (Cart::instance('caja4')->count()) {
            foreach (Cart::instance('caja4')->content() as $item) {
                $manga4 = $item->model->subcategory->name;
            }
            if ($manga4 == 'Corta' || $manga4 == 'corta') {
                switch (session()->get('divisa')) {
                    case 'MXN':
                        $mon4 = 'MXN';
                        break;
                    case 'USD':
                        $mon4 = 'USD';
                        break;
                    case '':
                        $mon4 = 'MXN';
                        break;
                }
            } else {
                switch (session()->get('divisa')) {
                    case 'MXN':
                        $mon4 = 'MXN_L';
                        break;
                    case 'USD':
                        $mon4 = 'USD_L';
                        break;
                    case '':
                        $mon4 = 'MXN_L';
                        break;
                }
            }
        }
        $total = (Cart::instance('caja1')->total()* $plan->$mon1) + (Cart::instance('caja2')->total()* $plan->$mon2) + (Cart::instance('caja3')->total()* $plan->$mon3) + (Cart::instance('caja4')->total()* $plan->$mon4);
        if (session()->get('divisa') == 'MXN') {
            $currency_value = $plan->MXN;
            $currency_value_L = $plan->MXN_L;
        }else{
            $currency_value = $plan->USD;
            $currency_value_L = $plan->USD_L;
        }

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'contact' => $request->name .' '. $request->last_name,
            'phone' => $request->phone,
            'bussiness' => $request->bussiness,
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
            'currency_value_L' => $currency_value_L,
            'message' => $request->message,

        ]);

        $order->update([
            'status'=>2
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

        $envio = json_decode($order->envio);

        $data["email"] = "info@testvandu.com";
        $data["title"] = "Nueva orden - ".$order->id;


        $pdf = PDF::loadView('mail', compact('order','envio'));
        Mail::send('emails.order-create', $data, function ($message) use ($data, $pdf,$order) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "orden-".$order->id."-".$order->created_at.".pdf");
        });
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
