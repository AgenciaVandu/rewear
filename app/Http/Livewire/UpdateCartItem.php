<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class UpdateCartItem extends Component
{
    public $rowId, $qty;
    public $quantity;

    public function mount()
    {
        $item = Cart::get($this->rowId);
        $this->qty = $item->qty;
        $this->quantity = qty_available($item->id);
    }

    public function decrement()
    {
        $this->qty -= 1;
        Cart::update($this->rowId, $this->qty);
        $this->emitTo('dropdown-cart', 'render');
    }

    public function increment()
    {
        $this->qty += 1;
        Cart::update($this->rowId, $this->qty);
        $this->emitTo('dropdown-cart', 'render');
    }

    public function render()
    {
        return view('livewire.update-cart-item');
    }
}
