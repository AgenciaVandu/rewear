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
        $item = Cart::instance('caja1')->get($this->rowId);
        $this->qty = $item->qty;
        $this->quantity = qty_available($item->id);
    }

    public function decrement()
    {
        if ($this->qty > 6) {
            $this->qty = $this->qty - 6;
        }
        Cart::instance('caja1')->update($this->rowId, $this->qty);
        $this->emit('render');
    }

    public function increment()
    {
        switch (session()->get('plan')) {
            case '1':
                if (Cart::instance('caja1')->count()+$this->qty >= 72) {
                    $this->qty += 6;
                }
                break;

            default:
                # code...
                break;
        }
        Cart::instance('caja1')->update($this->rowId, $this->qty);
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.update-cart-item');
    }
}
