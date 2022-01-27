@extends('layouts.rewear-azul')
@section('content')
    @push('css')
        <link rel="stylesheet" href="/css/products.css">
    @endpush
    <section id="cart">
        <div class="container">
            <div class="d-block d-sm-block d-md-block d-lg-block">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 pt-2">
                        <form action="{{ route('orders.create') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col gelion-bold">
                                    <label for="formGroupExampleInput">{{ __('Nombres*') }}</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="col gelion-bold">
                                    <label for="formGroupExampleInput">{{ __('Apellidos*') }}</label>
                                    <input type="text" class="form-control" name="last_name" id="apellidos" required>
                                </div>
                                <div class="col gelion-bold">
                                    <label for="phone">{{ __('Teléfono:') }}</label>
                                    <input type="text" id="phone" class="form-control" name="phone" required>
                                </div>
                            </div>
                            <div class="pt-3 gelion-bold" id="f-emprendedor">
                                <!--Emprendedor-->
                                <label for="formGroupExampleInput">{{ __('Nombre de tu empresa (opcional)') }}</label>
                                <input type="text" class="form-control" name="bussiness">
                            </div>
                            <div class="form-group gelion-bold pt-3">
                                <label for="inputAddress">{{ __('Dirección:') }}</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="8mile"
                                    name="address" required>
                            </div>
                            <div class="form-group gelion-bold">
                                <label for="inputCity">{{ __('Ciudad') }}</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="México" name="city"
                                    required>
                            </div>
                            <div class="form-group gelion-bold">
                                <label for="inputCity">{{ __('Estado') }}</label>
                                <input type="text" class="form-control" id="inputState" placeholder="México" name="state"
                                    required>
                            </div>
                            <div class="form-group gelion-bold">
                                <label for="inputCity">{{ __('Código postal') }}</label>
                                <input type="text" class="form-control" id="inputState" placeholder="México"
                                    name="postal_code" required>
                            </div>
                            <div class="mb-3 gelion-bold">
                                <label for="validationTextarea">{{ __('Mensaje') }}</label>
                                <textarea class="form-control" id="validationTextarea" placeholder="{{ __('Déjanos tu mensaje') }}"
                                    name="message" required></textarea>
                            </div>
                            <div type="submit" class="btn btn-primary gelion-bold mt-2">{{ __('Regresar') }}</div>

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 pt-2">
                        <div class="card p-4">
                            <p class="gelion-bold">{{ __('Total a pagar') }}</p>
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
                                        {{ __('Precio total') }}
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
                                            <button class="btn btn-secondary btn-block" type="submit">{{ __('Comprar ahora') }}</button>
                                        </div>
                                    @else
                                        <div class="btn btn-secondary gelion-bold mt-2 disabled btn-block">{{ __('Comprar ahora') }}</div>
                                    @endif
                                @break
                                @case(2)
                                    @if (Cart::instance('caja1')->count() + Cart::instance('caja2')->count() + Cart::instance('caja3')->count() == 144 || Cart::instance('caja1')->count() + Cart::instance('caja2')->count() + Cart::instance('caja3')->count() == 216)
                                        <div class="gelion-bold mt-2">
                                            <button class="btn btn-secondary btn-block" type="submit">{{ __('Comprar ahora') }}</button>
                                        </div>
                                    @else
                                        <div class="btn btn-secondary gelion-bold mt-2 disabled btn-block">{{ __('Comprar ahora') }}</div>
                                    @endif
                                @break
                                @case(3)
                                    @if (Cart::instance('caja1')->count() + Cart::instance('caja2')->count() + Cart::instance('caja3')->count() + Cart::instance('caja4')->count() == 288)
                                        <div class="gelion-bold mt-2">
                                            <button class="btn btn-secondary btn-block " type="submit">{{ __('Comprar ahora') }}</button>
                                        </div>
                                    @else
                                        <div class="btn btn-secondary gelion-bold mt-2 block disabled btn-block">{{ __('Comprar ahora') }}</div>
                                    @endif
                                @break
                                @default

                            @endswitch
                            {{-- <div class="col-12 gelion-bold text-center pt-3">
                                <p><button id="aumentar-planes" class="gelion-bold aumentar"
                                        style="color: #000; text-decoration: none;">Quiero aumentar mi plan</button> <br>
                                <div class="row" id="mostrar-planes">
                                    <div class="col-12">
                                        <p class="gelion-bold text-center">Selecciona un plan</p>
                                    </div>
                                    <div class="col">
                                        <button type="checkbox" class="btn btn-primary btn-block">Start</button>
                                    </div>
                                    <div class="col">
                                        <button type="checkbox" class="btn btn-primary btn-block">Plus</button>
                                    </div>
                                    <div class="col">
                                        <button type="checkbox" class="btn btn-primary btn-block">Top</button>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button id="cancelar-aumento" class="btn btn-outline-dark btn-sm">Cancelar</button>
                                </div>
                                <span class="gelion-thin">Precio más costo de envío por cotizar</span>
                                </p>
                            </div> --}}
                            </form>
                        </div>
                        <div class="col-12 gelion-bold pt-4">
                            <p>{{ __('Política de privacidad') }}</p>
                            <p class="gelion-thin size-2 text-justify">{{ __('Como parte de los mecanismos para manifestar negativa al tratamiento de datos personales, en todo momento podrá consultar su información, rectificarla u oponerte al tratamiento de tus datos personales, por lo que para ello podrá llamar a los teléfonos (999) 999 9999 o contacto@myrewear.com') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cruzada" class="pt-5 pb-5">
        <div class="container cruzada">
            <h5 class="gelion-bold text-center pt-3 pb-4">{{ __('TAMBIÉN TE PODRÍA INTERESAR') }}</h5>
            <div class="d-none d-sm-none d-md-none d-lg-block">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card espacio-card">
                                <div class="contenedor">
                                    @foreach ($product->images as $image)
                                        @if ($image->main == 'si')
                                            <a href="{{ route('catalogue.product', $product) }}">
                                                <img src="{{ Storage::url($image->url) }}"
                                                    class="@if ($loop->iteration != 1) top @endif fill"
                                                    alt="Productos del catálogo">
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                                <a href="{{ route('catalogue.product', $product) }}"
                                    style="color: #000; text-decoration: none;">
                                    <h5 class="gelion-bold pt-2">
                                        @if (session('locale') == 'es')
                                            {{ $product->name }}
                                            @else
                                            {{ $product->name_en }}
                                        @endif
                                    </h5>
                                </a>
                                {{-- <li class="gelion-bold size-2">{!! $product->description !!}</li> --}}
                                </li>
                                <li class="gelion-thin">{{ __('Medidas del modelo:') }} <span>{{ $product->measure }}</span></li>
                                <li class="gelion-thin">Fit: {{ __($product->subcategory->name) }}</li>
                                <div class="pt-3 d-flex">
                                    <div class="hoja">
                                        <img src="{{ asset('/img/catalogo/rewear.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-none d-sm-none d-md-block d-lg-none">
                <!--Producto MD-->
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-6">
                            <div class="card espacio-card">
                                <div class="contenedor-4">
                                    @foreach ($product->images as $image)
                                        @if ($image->main == 'si')
                                            <a href="{{ route('catalogue.product', $product) }}">
                                                <img src="{{ Storage::url($image->url) }}"
                                                    class="@if ($loop->iteration != 1) top @endif fill" alt="Productos del catálogo">
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                                <a href="" style="color: #000; text-decoration: none;">
                                    <h5 class="gelion-bold pt-2 size-product-1">{{ $product->name }}</h5>
                                </a>
                                {{-- <li class="gelion-bold">{!! $product->description !!}</li> --}}
                                </li>
                                <li class="gelion-thin">{{ __('Medidas del modelo:') }} <span>{{ $product->measure }}</span></li>
                                <li class="gelion-thin">Fit: {{ __($product->subcategory->name) }}</li>
                                <div class="pt-3 d-flex">
                                    <div class="hoja">
                                        <img src="{{ asset('/img/catalogo/rewear.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none">
                <!--Producto SM-->
                <div class="row">
                    <div class="col-sm-6 pt-4">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-6">
                                    <div class="card espacio-card">
                                        <div class="contenedor-2">
                                            @foreach ($product->images as $image)
                                                @if ($image->main == 'si')
                                                    <a href="{{ route('catalogue.product', $product) }}">
                                                        <img src="{{ Storage::url($image->url) }}" class="img-fluid"
                                                            alt="Productos del catálogo">
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                        <a href="" style="color: #000; text-decoration: none;">
                                            <h5 class="gelion-bold pt-2">{{ $product->name }}</h5>
                                        </a>
                                        <li class="gelion-thin size-product">{!! $product->description !!}</li>
                                        <div class="pt-3 d-flex">
                                            <div class="hoja">
                                                <img src="{{ asset('/img/catalogo/rewear.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
