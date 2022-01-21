<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $orders = Order::where('user_id',auth()->user()->id)->latest('id')->get();

        return view('rewear.user.cuenta.user',compact('orders'));
    }
}
