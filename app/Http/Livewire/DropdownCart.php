<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use Livewire\Component;

class DropdownCart extends Component
{
    protected $listeners = ['render'];
    public function render()
    {
        $plan = Plan::find(session()->get('plan'));
        return view('livewire.dropdown-cart',compact('plan'));
    }
}
