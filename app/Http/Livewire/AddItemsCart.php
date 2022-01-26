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
    public $product,$images=[],$colors,$color_id="",$size_id="", $color_limite=0;
    public $qty=6;
    public $options = [];

    public function mount(Product $product){
        $this->images = $product->images->where('main','!=','si');
        $this->colors = $product->colors;
        $this->color_id = $product->colors->first()->pivot->id;
        /* Cart::instance('caja1')->destroy();
        Cart::instance('caja2')->destroy();
        Cart::instance('caja3')->destroy();
        Cart::instance('caja4')->destroy(); */
    }

    public function increment(){
        if ($this->qty < 72) {
            $this->qty = $this->qty + 6;
        }
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
        $this->options['size_id'] = $size->id;
        $this->options['sku'] = $size->sku;
        $this->options['manga'] = $this->product->subcategory->name;


        $color_limite=0;
        $color_limite2=0;
        $color_limite3=0;
        $manga_limit = 0;
        $manga_limit2 = 0;
        $manga_limit3 = 0;
        $manga_limit4 = 0;
        $colors_array=[];



        if (session()->has('plan')) {
            $plan = Plan::find(session()->get('plan'));
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
                            'price' => 1,
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
                        //Validacion de managas por caja
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


                        if (Cart::instance('caja2')->count()) {
                            foreach (Cart::instance('caja2')->content() as $item) {
                                array_push($colors_array,$item->options->color);
                            }
                            //Generamos un array de los valores del color sin repetir
                            $colors_array = array_unique($colors_array);
                            foreach ($colors_array as $color_item) {
                                if ($color_item != $color->color->name) {
                                    $color_limite2++;
                                }
                            }
                            foreach (Cart::instance('caja2')->content() as $item) {
                                if ($item->model->subcategory->name != $this->product->subcategory->name) {
                                    $manga_limit2++;
                                }
                            }
                        }


                        if (Cart::instance('caja3')->count()) {
                            foreach (Cart::instance('caja3')->content() as $item) {
                                array_push($colors_array,$item->options->color);
                            }
                            //Generamos un array de los valores del color sin repetir
                            $colors_array = array_unique($colors_array);
                            foreach ($colors_array as $color_item) {
                                if ($color_item != $color->color->name) {
                                    $color_limite3++;
                                }
                            }
                            foreach (Cart::instance('caja3')->content() as $item) {
                                if ($item->model->subcategory->name != $this->product->subcategory->name) {
                                    $manga_limit3++;
                                }
                            }
                        }


                        if (Cart::instance('caja1')->count()+$this->qty <= 72 && Cart::instance('caja1')->count() <= 72 && $color_limite < 4 && $manga_limit == 0) {
                            Cart::instance('caja1')->add([
                                'id' => $this->product->id,
                                'name' => $this->product->name,
                                'price' => 1,
                                'qty' => $this->qty,
                                'weight' => 550,
                                'options' => $this->options
                            ])->associate('App\Models\Product');
                        }else if (Cart::instance('caja1')->count()+Cart::instance('caja2')->count()+$this->qty <= 144 && Cart::instance('caja1')->count()+Cart::instance('caja2')->count() >= 72 && $color_limite2 < 4 && $color_limite < 4 && $manga_limit2 == 0){
                            Cart::instance('caja2')->add([
                                'id' => $this->product->id,
                                'name' => $this->product->name,
                                'price' => 1,
                                'qty' => $this->qty,
                                'weight' => 550,
                                'options' => $this->options
                            ])->associate('App\Models\Product');
                         }else if (Cart::instance('caja1')->count()+Cart::instance('caja2')->count()+Cart::instance('caja3')->count()+$this->qty <= 216 && Cart::instance('caja1')->count()+Cart::instance('caja2')->count()+Cart::instance('caja3')->count() >= 144 && $color_limite3 < 4 && $color_limite2 < 4 && $color_limite < 4 && $manga_limit3 == 0){
                            Cart::instance('caja3')->add([
                                'id' => $this->product->id,
                                'name' => $this->product->name,
                                'price' => 1,
                                'qty' => $this->qty,
                                'weight' => 550,
                                'options' => $this->options
                            ])->associate('App\Models\Product');
                        }else{

                            if ($manga_limit != 0 || $manga_limit2 != 0 || $manga_limit3 != 0) {
                                session()->flash('message', 'Las cajas solo deben ser de un tipo de manga');
                            }else if($color_limite < 4 || $color_limite2 < 4 || $color_limite3 < 4){
                                session()->flash('message', 'Tu plan solo acepta 4 colores por caja, puedes aumentar tu plan <strong><a href="/planes">Aqui</a></strong>');
                            }else{
                                session()->flash('message', 'Limite de prendas alcanzado, puedes aumentar tu plan <strong><a href="/planes">Aqui</a></strong>');
                            }
                        }
                    break;
                    case '3':
                        //Validacion de managas por caja
                        if (Cart::instance('caja1')->count()) {
                            foreach (Cart::instance('caja1')->content() as $item) {
                                if ($item->model->subcategory->name != $this->product->subcategory->name) {
                                    $manga_limit++;
                                }
                            }
                        }
                        if (Cart::instance('caja2')->count()) {
                            foreach (Cart::instance('caja2')->content() as $item) {
                                if ($item->model->subcategory->name != $this->product->subcategory->name) {
                                    $manga_limit2++;
                                }
                            }
                        }
                        if (Cart::instance('caja3')->count()) {
                            foreach (Cart::instance('caja3')->content() as $item) {
                                if ($item->model->subcategory->name != $this->product->subcategory->name) {
                                    $manga_limit3++;
                                }
                            }
                        }
                        if (Cart::instance('caja4')->count()) {
                            foreach (Cart::instance('caja4')->content() as $item) {
                                if ($item->model->subcategory->name != $this->product->subcategory->name) {
                                    $manga_limit4++;
                                }
                            }
                        }
                        if (Cart::instance('caja1')->count()+$this->qty <= 72 && Cart::instance('caja1')->count() <= 72 && $manga_limit == 0) {
                            Cart::instance('caja1')->add([
                                'id' => $this->product->id,
                                'name' => $this->product->name,
                                'price' => 1,
                                'qty' => $this->qty,
                                'weight' => 550,
                                'options' => $this->options
                            ])->associate('App\Models\Product');
                        }else if (Cart::instance('caja1')->count()+Cart::instance('caja2')->count()+$this->qty <= 144 && Cart::instance('caja1')->count()+Cart::instance('caja2')->count() >= 72 && $manga_limit2 == 0){
                            Cart::instance('caja2')->add([
                                'id' => $this->product->id,
                                'name' => $this->product->name,
                                'price' => 1,
                                'qty' => $this->qty,
                                'weight' => 550,
                                'options' => $this->options
                            ])->associate('App\Models\Product');
                         }else if (Cart::instance('caja1')->count()+Cart::instance('caja2')->count()+Cart::instance('caja3')->count()+$this->qty <= 216 && Cart::instance('caja1')->count()+Cart::instance('caja2')->count()+Cart::instance('caja3')->count() >= 144 && $manga_limit3 == 0){
                            Cart::instance('caja3')->add([
                                'id' => $this->product->id,
                                'name' => $this->product->name,
                                'price' => 1,
                                'qty' => $this->qty,
                                'weight' => 550,
                                'options' => $this->options
                            ])->associate('App\Models\Product');
                        }
                        else if (Cart::instance('caja1')->count()+Cart::instance('caja2')->count()+Cart::instance('caja3')->count()+Cart::instance('caja4')->count()+$this->qty <= 288 && Cart::instance('caja1')->count()+Cart::instance('caja2')->count()+Cart::instance('caja3')->count()+Cart::instance('caja4')->count() >= 216 && $manga_limit4 == 0){
                            Cart::instance('caja4')->add([
                                'id' => $this->product->id,
                                'name' => $this->product->name,
                                'price' => 1,
                                'qty' => $this->qty,
                                'weight' => 550,
                                'options' => $this->options
                            ])->associate('App\Models\Product');
                        }else{
                            if ($manga_limit != 0 || $manga_limit2 != 0 || $manga_limit3 != 0) {
                                session()->flash('message', 'Las cajas solo deben ser de un tipo de manga');
                            }else{
                                session()->flash('message', 'Limite de prendas alcanzado, puedes aumentar tu plan <strong><a href="/planes">Aqui</a></strong>');
                            }
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
