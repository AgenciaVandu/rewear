<div class="container">
    <div class="d-block d-sm-block d-md-block d-lg-block">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 pt-2">
                <div class="card p-4">
                    <div class="d-none d-sm-none col-md-block d-lg-block">
                        <div class="row">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-lg-2 col-md-1 col-sm-12 text-right">
                                        <img src="{{ asset('/img/index/box.svg') }}" width="65" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-11 col-sm-12 m-auto ">
                                                     <li class="gelion-bold">Paquete {{ $plan->name }} piezas
                                            @switch($plan->id)
                                                @case(1)
                                                    72
                                                @break
                                                @case(2)
                                                    144 ó 216 (Caja opcional)
                                                @break
                                                @case(3)
                                                    288
                                                @break

                                            @endswitch ${{ $plan->MXN }}/pieza
                                        </li>
                                        <li class="gelion-thin">Faltan @switch(session()->get('plan'))
                                                @case(1)
                                                    {{ 72 - Cart::instance('caja1')->count() }}
                                                @break
                                                @case(2)
                                                    {{ 144 - (Cart::instance('caja1')->count() + Cart::instance('caja2')->count()) }}
                                                @break
                                                @default

                                            @endswitch
                                            piezas para completar
                                        </li>
                                        <li></li>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center">
                                <li class="gelion-bold size-2">Paso 1 de 2</li>
                                <li class="gelion-thin"><a href="/catalogo/cart-empty.html"
                                        style="color: #000; text-decoration: none;">Vaciar cesta</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table mt-4 table-borderless">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Producto</th>
                                    <th scope="col">Fit</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Talla</th>
                                </tr>
                            </thead>
                            <tbody>
                                @switch(session()->get('plan'))
                                    @case(1)
                                        @foreach (Cart::instance('caja1')->content() as $item)
                                            <tr class="text-center">
                                                <!--producto-->
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-3 col-sm-6" id="cesta">
                                                            <img src="{{ $item->options->image }}" class="img-fluid">
                                                        </div>
                                                        <div class="col-lg-8 col-md-9 col-sm-6 text-left m-auto pt-2">
                                                            <p class="gelion-bold size-3 ml-3">{{ $item->name }} <br>
                                                                <span>
                                                                    <a wire:click="delete('{{ $item->rowId }}')"
                                                                        class="size-2 gelion-thin"
                                                                        style="text-decoration: none; color: #000; cursor: pointer">Eliminar</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">
                                                        {{ $item->model->subcategory->category->name }}</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        @livewire('update-cart-item', ['rowId' => $item->rowId],
                                                        key($item->rowId))
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->color }}</p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->size }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @break
                                    @case(2)
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-10 col-md-11 col-sm-12 m-auto ">
                                                        <li class="gelion-bold">Paquete {{ $plan->name }}
                                                            Caja 1
                                                        </li>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="col-lg-9 col-md-9 col-sm-6 text-center">
                                                    <span>
                                                        <a class="size-2 gelion-thin"
                                                            style="text-decoration: none; color: #000; cursor: pointer">Eliminar</a>
                                                    </span>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach (Cart::instance('caja1')->content() as $item)
                                            <tr class="text-center">
                                                <!--producto-->
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-6" id="cesta">
                                                            <img src="{{ $item->options->image }}"
                                                                class="img-fluid">
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-6 text-left m-auto pt-2">
                                                            <p class="gelion-bold size-3 ml-3">{{ $item->name }} <br>
                                                                <span>
                                                                    <a wire:click="delete('{{ $item->rowId }}')"
                                                                        class="size-2 gelion-thin"
                                                                        style="text-decoration: none; color: #000; cursor: pointer">Eliminar</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">
                                                        {{ $item->model->subcategory->category->name }}</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        @livewire('update-cart-item', ['rowId' => $item->rowId],
                                                        key('update-cart-item'.$item->rowId))
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->color }}</p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->size }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if (Cart::instance('caja2')->count())
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-10 col-md-11 col-sm-12 m-auto ">
                                                            <li class="gelion-bold">Paquete {{ $plan->name }}
                                                                Caja 2
                                                            </li>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="col-lg-9 col-md-9 col-sm-6 text-center">
                                                        <span>
                                                            <a class="size-1 gelion-thin"
                                                                style="text-decoration: none; color: #000; cursor: pointer"
                                                                wire:click="destroy(2)">Eliminar caja</a>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        @foreach (Cart::instance('caja2')->content() as $item)
                                            <tr class="text-center">
                                                <!--producto-->
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-6" id="cesta">
                                                            <img src="{{ $item->options->image }}"
                                                                class="img-fluid">
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-6 text-left m-auto pt-2">
                                                            <p class="gelion-bold size-3 ml-3">{{ $item->name }} <br>
                                                                <span>
                                                                    <a wire:click="delete2('{{ $item->rowId }}')"
                                                                        class="size-2 gelion-thin"
                                                                        style="text-decoration: none; color: #000; cursor: pointer">Eliminar</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">
                                                        {{ $item->model->subcategory->category->name }}</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        @livewire('update-cart-item2', ['rowId' => $item->rowId],
                                                        key('update-cart-item2'.$item->rowId))
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->color }}</p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->size }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if (Cart::instance('caja3')->count())
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-10 col-md-11 col-sm-12 m-auto ">
                                                            <li class="gelion-bold">Paquete {{ $plan->name }}
                                                                Caja 3 (Opcional)
                                                            </li>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="col-lg-9 col-md-9 col-sm-6 text-center">
                                                        <span>
                                                            <a class="size-1 gelion-thin"
                                                                style="text-decoration: none; color: #000; cursor: pointer"
                                                                wire:click="destroy(3)">Eliminar caja</a>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        @foreach (Cart::instance('caja3')->content() as $item)
                                            <tr class="text-center">
                                                <!--producto-->
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-6" id="cesta">
                                                            <img src="{{ $item->options->image }}"
                                                                class="img-fluid">
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-6 text-left m-auto pt-2">
                                                            <p class="gelion-bold size-3 ml-3">{{ $item->name }} <br>
                                                                <span>
                                                                    <a wire:click="delete3('{{ $item->rowId }}')"
                                                                        class="size-2 gelion-thin"
                                                                        style="text-decoration: none; color: #000; cursor: pointer">Eliminar</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">
                                                        {{ $item->model->subcategory->category->name }}</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        @livewire('update-cart-item3', ['rowId' => $item->rowId],
                                                        key('update-cart-item3'.$item->rowId))
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->color }}</p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->size }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @break
                                    @case(3)
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-10 col-md-11 col-sm-12 m-auto ">
                                                        <li class="gelion-bold">Paquete {{ $plan->name }}
                                                            Caja 1
                                                        </li>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="col-lg-9 col-md-9 col-sm-6 text-center">
                                                    <span>
                                                        <a class="size-2 gelion-thin"
                                                            style="text-decoration: none; color: #000; cursor: pointer"
                                                            wire:click="destroy(1)">Eliminar</a>
                                                    </span>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach (Cart::instance('caja1')->content() as $item)
                                            <tr class="text-center">
                                                <!--producto-->
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-6" id="cesta">
                                                            <img src="{{ $item->options->image }}"
                                                                class="img-fluid">
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-6 text-left m-auto pt-2">
                                                            <p class="gelion-bold size-3 ml-3">{{ $item->name }} <br>
                                                                <span>
                                                                    <a wire:click="delete('{{ $item->rowId }}')"
                                                                        class="size-2 gelion-thin"
                                                                        style="text-decoration: none; color: #000; cursor: pointer">Eliminar</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">
                                                        {{ $item->model->subcategory->category->name }}</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        @livewire('update-cart-item', ['rowId' => $item->rowId],
                                                        key('update-cart-item'.$item->rowId))
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->color }}</p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->size }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if (Cart::instance('caja2')->count())
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-10 col-md-11 col-sm-12 m-auto ">
                                                            <li class="gelion-bold">Paquete {{ $plan->name }}
                                                                Caja 2
                                                            </li>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="col-lg-9 col-md-9 col-sm-6 text-center">
                                                        <span>
                                                            <a class="size-1 gelion-thin"
                                                                style="text-decoration: none; color: #000; cursor: pointer"
                                                                wire:click="destroy(2)">Eliminar caja</a>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        @foreach (Cart::instance('caja2')->content() as $item)
                                            <tr class="text-center">
                                                <!--producto-->
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-6" id="cesta">
                                                            <img src="{{ $item->options->image }}"
                                                                class="img-fluid">
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-6 text-left m-auto pt-2">
                                                            <p class="gelion-bold size-3 ml-3">{{ $item->name }} <br>
                                                                <span>
                                                                    <a wire:click="delete2('{{ $item->rowId }}')"
                                                                        class="size-2 gelion-thin"
                                                                        style="text-decoration: none; color: #000; cursor: pointer">Eliminar</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">
                                                        {{ $item->model->subcategory->category->name }}</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        @livewire('update-cart-item2', ['rowId' => $item->rowId],
                                                        key('update-cart-item2'.$item->rowId))
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->color }}</p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->size }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if (Cart::instance('caja3')->count())
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-10 col-md-11 col-sm-12 m-auto ">
                                                            <li class="gelion-bold">Paquete {{ $plan->name }}
                                                                Caja 3
                                                            </li>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="col-lg-9 col-md-9 col-sm-6 text-center">
                                                        <span>
                                                            <a class="size-1 gelion-thin"
                                                                style="text-decoration: none; color: #000; cursor: pointer"
                                                                wire:click="destroy(3)">Eliminar caja</a>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        @foreach (Cart::instance('caja3')->content() as $item)
                                            <tr class="text-center">
                                                <!--producto-->
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-6" id="cesta">
                                                            <img src="{{ $item->options->image }}"
                                                                class="img-fluid">
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-6 text-left m-auto pt-2">
                                                            <p class="gelion-bold size-3 ml-3">{{ $item->name }} <br>
                                                                <span>
                                                                    <a wire:click="delete3('{{ $item->rowId }}')"
                                                                        class="size-2 gelion-thin"
                                                                        style="text-decoration: none; color: #000; cursor: pointer">Eliminar</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">
                                                        {{ $item->model->subcategory->category->name }}</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        @livewire('update-cart-item3', ['rowId' => $item->rowId],
                                                        key('update-cart-item3'.$item->rowId))
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->color }}</p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->size }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if (Cart::instance('caja4')->count())
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-10 col-md-11 col-sm-12 m-auto ">
                                                            <li class="gelion-bold">Paquete {{ $plan->name }}
                                                                Caja 4
                                                            </li>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="col-lg-9 col-md-9 col-sm-6 text-center">
                                                        <span>
                                                            <a class="size-1 gelion-thin"
                                                                style="text-decoration: none; color: #000; cursor: pointer"
                                                                wire:click="destroy(1)">Eliminar caja</a>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        @foreach (Cart::instance('caja4')->content() as $item)
                                            <tr class="text-center">
                                                <!--producto-->
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-6" id="cesta">
                                                            <img src="{{ $item->options->image }}"
                                                                class="img-fluid">
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-6 text-left m-auto pt-2">
                                                            <p class="gelion-bold size-3 ml-3">{{ $item->name }} <br>
                                                                <span>
                                                                    <a wire:click="delete4('{{ $item->rowId }}')"
                                                                        class="size-2 gelion-thin"
                                                                        style="text-decoration: none; color: #000; cursor: pointer">Eliminar</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">
                                                        {{ $item->model->subcategory->category->name }}</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        @livewire('update-cart-item4', ['rowId' => $item->rowId],
                                                        key('update-cart-item4'.$item->rowId))
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->color }}</p>
                                                </td>
                                                <td>
                                                    <p class="gelion-thin pt-3">{{ $item->options->size }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @break

                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 pt-2">
                <div class="card p-4">
                    <p class="gelion-bold">Total a pagar</p>
                    <div class="row">
                        <div class="col-6">
                            <p class="gelion-thin">
                                Subtotal
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            @php
                                $mon = 'MXN';
                                $mon1 = 'MXN';
                                $mon2 = 'MXN';
                                $mon3 = 'MXN';
                                $mon4 = 'MXN';

                                if (Cart::instance('caja1')->count()) {
                                    foreach (Cart::instance('caja1')->content() as $item) {
                                        $manga1 = $item->model->subcategory->name;
                                    }
                                    if ($manga1 == 'Corta' || $manga1 == 'corta') {
                                        switch (session()->get('divisa')) {
                                            case 'MXN':
                                                $mon1 = 'MXN';
                                                break;
                                            case 'USD':
                                                $mon1 = 'USD';
                                                break;
                                            case '':
                                                $mon1 = 'MXN';
                                                break;
                                        }
                                    } else {
                                        switch (session()->get('divisa')) {
                                            case 'MXN':
                                                $mon1 = 'MXN_L';
                                                break;
                                            case 'USD':
                                                $mon1 = 'USD_L';
                                                break;
                                            case '':
                                                $mon1 = 'MXN_L';
                                                break;
                                        }
                                    }
                                }
                                if (Cart::instance('caja2')->count()) {
                                    foreach (Cart::instance('caja2')->content() as $item) {
                                        $manga2 = $item->model->subcategory->name;
                                    }
                                    if ($manga2 == 'Corta' || $manga2 == 'corta') {
                                        switch (session()->get('divisa')) {
                                            case 'MXN':
                                                $mon2 = 'MXN';
                                                break;
                                            case 'USD':
                                                $mon2 = 'USD';
                                                break;
                                            case '':
                                                $mon2 = 'MXN';
                                                break;
                                        }
                                    } else {
                                        switch (session()->get('divisa')) {
                                            case 'MXN':
                                                $mon2 = 'MXN_L';
                                                break;
                                            case 'USD':
                                                $mon2 = 'USD_L';
                                                break;
                                            case '':
                                                $mon2 = 'MXN_L';
                                                break;
                                        }
                                    }
                                }
                                if (Cart::instance('caja3')->count()) {
                                    foreach (Cart::instance('caja3')->content() as $item) {
                                        $manga3 = $item->model->subcategory->name;
                                    }
                                    if ($manga3 == 'Corta' || $manga3 == 'corta') {
                                        switch (session()->get('divisa')) {
                                            case 'MXN':
                                                $mon3 = 'MXN';
                                                break;
                                            case 'USD':
                                                $mon3 = 'USD';
                                                break;
                                            case '':
                                                $mon3 = 'MXN';
                                                break;
                                        }
                                    } else {
                                        switch (session()->get('divisa')) {
                                            case 'MXN':
                                                $mon3 = 'MXN_L';
                                                break;
                                            case 'USD':
                                                $mon3 = 'USD_L';
                                                break;
                                            case '':
                                                $mon3 = 'MXN_L';
                                                break;
                                        }
                                    }
                                }
                                if (Cart::instance('caja4')->count()) {
                                    foreach (Cart::instance('caja4')->content() as $item) {
                                        $manga4 = $item->model->subcategory->name;
                                    }
                                    if ($manga4 == 'Corta' || $manga4 == 'corta') {
                                        switch (session()->get('divisa')) {
                                            case 'MXN':
                                                $mon4 = 'MXN';
                                                break;
                                            case 'USD':
                                                $mon4 = 'USD';
                                                break;
                                            case '':
                                                $mon4 = 'MXN';
                                                break;
                                        }
                                    } else {
                                        switch (session()->get('divisa')) {
                                            case 'MXN':
                                                $mon4 = 'MXN_L';
                                                break;
                                            case 'USD':
                                                $mon4 = 'USD_L';
                                                break;
                                            case '':
                                                $mon4 = 'MXN_L';
                                                break;
                                        }
                                    }
                                }
                            @endphp
                            <p class="gelion-thin">
                                ${{ number_format(Cart::instance('caja1')->subtotal() * $plan->$mon1 + Cart::instance('caja2')->subtotal() * $plan->$mon2 + Cart::instance('caja3')->subtotal() * $plan->$mon3 + Cart::instance('caja4')->subtotal() * $plan->$mon4, 2) }}
                            </p>
                        </div>
                        {{-- <div class="col-6">
                            <p class="gelion-thin">
                                Impuestos
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            <p class="gelion-thin">
                                ${{ number_format(Cart::instance('caja1')->tax(16) * $plan->$mon1 + Cart::instance('caja2')->tax(16) * $plan->$mon2 + Cart::instance('caja3')->tax(16) * $plan->$mon3 + Cart::instance('caja4')->tax(16) * $plan->$mon4, 2) }}
                            </p>
                        </div> --}}
                        <div class="col-6">
                            <p class="gelion-thin">
                                Precio total
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            <p class="gelion-thin">
                                ${{ number_format((Cart::instance('caja1')->total()* $plan->$mon1 + Cart::instance('caja2')->total()* $plan->$mon2 + Cart::instance('caja3')->total()* $plan->$mon3 + Cart::instance('caja4')->total()* $plan->$mon4), 2) }}
                            </p>
                        </div>
                    </div>
                    @switch(session()->get('plan'))
                        @case(1)
                            @if (Cart::instance('caja1')->count() == 72)
                                <div class="gelion-bold mt-2">
                                    <a class="btn btn-secondary d-block" href="{{ route('checkout') }}">Comprar
                                        ahora</a>
                                </div>
                            @else
                                <div class="btn btn-secondary gelion-bold mt-2 disabled">Comprar ahora</div>
                            @endif
                        @break
                        @case(2)
                            @if (Cart::instance('caja1')->count() + Cart::instance('caja2')->count() + Cart::instance('caja3')->count() == 144 || Cart::instance('caja1')->count() + Cart::instance('caja2')->count() + Cart::instance('caja3')->count() == 216)
                                <div class="gelion-bold mt-2">
                                    <a class="btn btn-secondary d-block" href="{{ route('checkout') }}">Comprar
                                        ahora</a>
                                </div>
                            @else
                                <div class="btn btn-secondary gelion-bold mt-2 disabled">Comprar ahora</div>
                            @endif
                        @break
                        @case(3)
                            @if (Cart::instance('caja1')->count() + Cart::instance('caja2')->count() + Cart::instance('caja3')->count() + Cart::instance('caja4')->count() == 288)
                                <div class="gelion-bold mt-2">
                                    <a class="btn btn-secondary d-block" href="{{ route('checkout') }}">Comprar
                                        ahora</a>
                                </div>
                            @else
                                <div class="btn btn-secondary gelion-bold mt-2 disabled">Comprar ahora</div>
                            @endif
                        @break
                        @default

                    @endswitch
                    <div class="col-12 gelion-bold text-center pt-3" wire:ignore>
                        <p><button id="aumentar-planes" class="gelion-bold aumentar"
                                style="color: #000; text-decoration: none;">Quiero aumentar mi plan</button> <br>
                        <div class="row" id="mostrar-planes">
                            <div class="col-12">
                                <p class="gelion-bold text-center">Selecciona un plan</p>
                            </div>

                            <div class="col">
                                @if (session()->get('plan') == 1)
                                    <a class="btn btn-primary btn-block disabled ">Start</a>
                                @else
                                    <a href="{{ route('plan', 1) }}" class="btn btn-primary btn-block">Start</a>
                                @endif
                            </div>
                            <div class="col">
                                @if (session()->get('plan') == 2)
                                    <a class="btn btn-primary btn-block disabled ">Plus</a>
                                @else
                                    <a href="{{ route('plan', 2) }}" class="btn btn-primary btn-block">Plus</a>
                                @endif
                            </div>
                            <div class="col">
                                @if (session()->get('plan') == 3)
                                    <a class="btn btn-primary btn-block disabled ">Top</a>
                                @else
                                    <a href="{{ route('plan', 3) }}" class="btn btn-primary btn-block">Top</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <button id="cancelar-aumento" class="btn btn-outline-dark btn-sm">Cancelar</button>
                        </div>
                        <span class="gelion-thin">Precio más costo de envío por cotizar</span>
                        </p>
                    </div>
                </div>
                <div class="col-12 gelion-bold pt-4">
                    <p>Política de privacidad:</p>
                    <p class="gelion-thin size-2 text-justify">Como parte de los mecanismos para manifestar negativa
                        al tratamiento de datos personales, en todo momento podrá consultar su información,
                        rectificarla u oponerte al tratamiento de tus datos personales, por lo que para ello podrá
                        llamar a los teléfonos (999) 999 9999 o contacto@myrewear.com</p>
