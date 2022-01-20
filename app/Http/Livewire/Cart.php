<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Livewire\Component;

class Cart extends Component
{   public $plan;
    public $listeners = ['render'];


    public function delete($rowId){
        FacadesCart::instance('caja1')->remove($rowId);
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
