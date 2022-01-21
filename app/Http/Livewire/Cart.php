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

    public function delete2($rowId){
        FacadesCart::instance('caja2')->remove($rowId);
    }

    public function delete3($rowId){
        FacadesCart::instance('caja3')->remove($rowId);
    }

    public function delete4($rowId){
        FacadesCart::instance('caja4')->remove($rowId);
    }


    public function destroy($value){
        switch ($value) {
            case '1':
                FacadesCart::instance('caja1')->destroy();
                break;
            case '2':
                FacadesCart::instance('caja2')->destroy();
                break;
            case '3':
                FacadesCart::instance('caja3')->destroy();
                break;
            case '4':
                FacadesCart::instance('caja4')->destroy();
                break;

            default:
                # code...
                break;
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
