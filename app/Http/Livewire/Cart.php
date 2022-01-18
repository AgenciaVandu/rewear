<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{   public $plan;
    public $listeners = ['render'];

    public function render()
    {
        return view('livewire.cart');
    }
}
