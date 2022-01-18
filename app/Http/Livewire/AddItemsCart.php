<?php

namespace App\Http\Livewire;

use App\Models\ColorProduct;
use App\Models\Image;
use App\Models\Plan;
use App\Models\Product;
use App\Models\ProductSize;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddItemsCart extends Component
{
    public $product,$images,$colors,$color_id="",$size_id="", $color_limite=0;
    public $qty=6;
    public $options = [];

    public function mount(Product $product){
        $this->images = $product->images;
        $this->colors = $product->colors;
        /* Cart::instance('caja1')->destroy(); */
    }

    public function increment(){
        $this->qty = $this->qty + 6;
    }

    public function decrement(){
        if ($this->qty > 6) {
            $this->qty = $this->qty - 6;
        }
    }

    public function addItems(){
        $color = ColorProduct::find($this->color_id);
        $size = ProductSize::find($this->size_id);
        $this->options['image'] = Storage::url($this->product->images->first()->url);
        /* $size = $this->product->size->find($this->color_id); */
        $this->options['color'] = $color->color->name;
        $this->options['color_id'] = $color->color->id;
        $this->options['size'] = $size->size->code;
        $this->options['size_id'] = $size->size->id;


        $color_limite=0;
        if (session()->has('plan')) {
            $plan = Plan::find(session()->get('plan'));
            $price = $plan->price;
            switch (session()->get('plan')) {

                //Validaciones para el plan Start
                case '1':
                    foreach (Cart::instance('caja1')->content() as $item) {
                        if ($item->options->color != $color->color->name) {
                            $color_limite = $color_limite+1;
                        }
                    }
                    if (Cart::instance('caja1')->count()+$this->qty <= 72 && Cart::instance('caja1')->count() <= 72 && $color_limite < 2) {
                        Cart::instance('caja1')->add([
                            'id' => $this->product->id,
                            'name' => $this->product->name,
                            'price' => $price,
                            'qty' => $this->qty,
                            'weight' => 550,
                            'options' => $this->options
                        ])->associate('App\Models\Product');
                    }else{
                        if ($color_limite >= 2) {
                            session()->flash('message', 'Tu plan no permite agregar mas de 2 colores diferentes, aumenta tu plan <strong><a href="/#planes">Aqui</a></strong>');
                        }else{
                            session()->flash('message', 'Limite de prendas alcanzado, puedes aumentar tu plan <strong><a href="/#planes">Aqui</a></strong>');
                        }
                    }
                    break;
                    case '2':
                        if (Cart::instance('caja1')->count()+$this->qty <= 144 && Cart::instance('caja1')->count() <= 144 ) {
                            Cart::instance('caja1')->add([
                                'id' => $this->product->id,
                                'name' => $this->product->name,
                                'price' => $price,
                                'qty' => $this->qty,
                                'weight' => 550,
                                'options' => $this->options
                            ])->associate('App\Models\Product');
                        }else{
                            session()->flash('message', 'Limite de prendas alcanzado, puedes aumentar tu plan <strong><a href="/#planes">Aqui</a></strong>');
                        }
                    break;
            }
        }else{
            return redirect('/#planes');
        }
        $this->reset('qty');
        $this->emitTo('dropdown-cart','render');
    }

    public function render(){
        $imagesColor = Image::where('imageable_id',$this->color_id)->where('imageable_type','App\Models\ColorProduct')->get();

        return view('livewire.add-items-cart',compact('imagesColor'));
    }
}
