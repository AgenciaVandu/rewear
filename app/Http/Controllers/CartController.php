<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $plan = Plan::find(session()->get('plan'));
        return view('rewear.catalogo.cart',compact('plan'));
    }
}
