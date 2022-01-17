<?php

namespace App\Http\Livewire\Admin;

use App\Models\Color;
use App\Models\ColorProduct as ModelsColorProduct;
use Livewire\Component;

class ColorProduct extends Component
{
    public $product,$colors,$colors_id,$color_product;
    protected $listeners = ['render'];


    public function mount(){
        $this->colors = Color::all();
        $this->color_product = ModelsColorProduct::where('product_id',$this->product->id)->get();
    }

    public function save(){
        $product = $this->product;
        $product->colors()->attach($this->colors_id);
        $this->color_product = ModelsColorProduct::where('product_id',$product->id)->get();
    }

    public function delete(ModelsColorProduct $color){
        $color->delete();
        $this->color_product = ModelsColorProduct::where('product_id',$this->product->id)->get();
    }

    public function render()
    {
        return view('livewire.admin.color-product');
    }
}
