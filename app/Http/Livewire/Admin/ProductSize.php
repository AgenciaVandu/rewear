<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductSize as ModelsProductSize;
use App\Models\Size;
use Livewire\Component;

class ProductSize extends Component
{
    public $product,$sizes,$sizes_id,$size_product;
    protected $listeners = ['render'];


    public function mount(){
        $this->sizes = Size::all();
        $this->size_product = ModelsProductSize::where('product_id',$this->product->id)->get();
    }

    public function save(){
        $product = $this->product;
        $product->sizes()->attach($this->sizes_id);
        $this->size_product = ModelsProductSize::where('product_id',$product->id)->get();
    }

    public function delete(ModelsProductSize $color){
        $color->delete();
        $this->size_product = ModelsProductSize::where('product_id',$this->product->id)->get();
    }

    public function render()
    {
        return view('livewire.admin.product-size');
    }
}
