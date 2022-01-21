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
        $manga_limit = 0;
        $colors_array=[];
        if (session()->has('plan')) {
            $plan = Plan::find(session()->get('plan'));
            $price = $plan->MXN;
            switch (session()->get('plan')) {

                //Validaciones para el plan Start
                case '1':
                    //Creamos el array para validar que solo 2 colores se pueden agregar a la cesta en este plan
                    if (Cart::instance('caja1')->count()) {
                        foreach (Cart::instance('caja1')->content() as $item) {
                            array_push($colors_array,$item->options->color);
                        }
                        //Generamos un array de los valores del color sin repetir
                        $colors_array = array_unique($colors_array);
                        foreach ($colors_array as $color_item) {
                            if ($color_item != $color->color->name) {
                                $color_limite++;
                            }
                        }
                        foreach (Cart::instance('caja1')->content() as $item) {
                            if ($item->model->subcategory->name != $this->product->subcategory->name) {
                                $manga_limit++;
                            }
                        }
                    }
                    //Condiciones para agregar mas productos segun la cantidad del paquete y los colores permitidos
                    if (Cart::instance('caja1')->count()+$this->qty <= 72 && Cart::instance('caja1')->count() <= 72 && $color_limite < 2 && $manga_limit == 0) {
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
                            if (Cart::instance('caja1')->count() == 72) {
                                session()->flash('message', 'Limite de prendas alcanzado, puedes aumentar tu plan <strong><a href="/planes">Aqui</a></strong>');
                            }elseif($manga_limit!=0){
                                session()->flash('message', 'Las cajas solo deben ser de un tipo de manga');
                            }else{
                                session()->flash('message', 'Tu plan no permite agregar mas de 2 colores diferentes, aumenta tu plan <strong><a href="/planes">Aqui</a></strong>');
                            }
                        }else{
                            if ($manga_limit != 0) {
                                session()->flash('message', 'Las cajas solo deben ser de un tipo de manga');
                            }else{
                                session()->flash('message', 'Limite de prendas alcanzado, puedes aumentar tu plan <strong><a href="/planes">Aqui</a></strong>');
                            }
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
                            session()->flash('message', 'Limite de prendas alcanzado, puedes aumentar tu plan <strong><a href="/planes">Aqui</a></strong>');
                        }
                    break;
            }
        }else{
            return redirect('/planes');
        }
        $this->reset('qty');
        $this->emitTo('dropdown-cart','render');
    }

    public function render(){
        $imagesColor = Image::where('imageable_id',$this->color_id)->where('imageable_type','App\Models\ColorProduct')->get();

        return view('livewire.add-items-cart',compact('imagesColor'));
    }
}
