<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $colors = Color::all();
        $hombre = Category::where('name','LIKE','Hombre')->first();
        $mujer = Category::where('name','LIKE','Mujer')->first();
        return view('rewear.index',compact('colors','hombre','mujer'));
    }

    public function about(){
        return view('rewear.nosotros');
    }

    public function faq(){
        return view('rewear.faq');
    }

    public function contact(){
        return view('rewear.contacto');
    }
}
