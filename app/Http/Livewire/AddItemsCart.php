<?php

namespace App\Http\Livewire;

use App\Models\ColorProduct;
use App\Models\Image;
use App\Models\Product;
use Livewire\Component;

class AddItemsCart extends Component
{
    public $product,$images,$colors,$color_id="";
    public $qty=6;

    public function mount(Product $product){
        $this->images = $product->images;
        $this->colors = $product->colors;
    }

    public function increment(){
        $this->qty = $this->qty + 6;
    }

    public function decrement(){
        if ($this->qty > 6) {
            $this->qty = $this->qty - 6;
        }
    }

    public function render(){
        $imagesColor = Image::where('imageable_id',$this->color_id)->where('imageable_type','App\Models\ColorProduct')->get();

        return view('livewire.add-items-cart',compact('imagesColor'));
    }
}
