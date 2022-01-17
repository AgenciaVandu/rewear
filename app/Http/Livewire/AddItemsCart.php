<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddItemsCart extends Component
{
    public $product;
    public $qty=6;

    public function increment(){
        $this->qty = $this->qty + 6;
    }

    public function decrement(){
        if ($this->qty > 6) {
            $this->qty = $this->qty - 6;
        }
    }


    public function render()
    {
        return view('livewire.add-items-cart');
    }
}
