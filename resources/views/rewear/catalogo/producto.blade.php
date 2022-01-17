@extends('layouts.rewear-azul')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/products.css') }}">
        <link rel="stylesheet" href="{{ asset('/lib/icomoon-v1.0/style.css') }}">
    @endpush
    <section id="product">
        <div class="container">
            <div class="product-inner">

                    @livewire('add-items-cart', ['product' => $product])
                
            </div>
        </div>
    </section>
    <section id="cruzada" class="pt-5 pb-5">
        <div class="container cruzada">
            <h5 class="gelion-bold text-center pt-3 pb-4">TAMBIÉN TE PODRÍA INTERESAR</h5>
            <div class="d-none d-sm-none d-md-none d-lg-block">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card espacio-card">
                                <div class="contenedor-1">
                                    <a href="">
                                        <img src="{{ Storage::url($product->images->first()->url) }}"
                                            class="img-fluid" alt="Productos del catálogo">
                                    </a>
                                    <a href="">
                                        <img src="{{ Storage::url($product->images->last()->url) }}"
                                            class="top img-fluid" alt="Productos del catálogo">
                                    </a>
                                </div>
                                <a href="" style="color: #000; text-decoration: none;">
                                    <h5 class="gelion-bold pt-2">{{ $product->name }}</h5>
                                </a>
                                <li class="gelion-bold size-2">{!! $product->description !!}</li>
                                </li>
                                <li class="gelion-thin">Peso de tela: <span>{{ $product->measure }}</span>
                                </li>
                                <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                </li>
                                <li class="gelion-thin">Regular fit</li>
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
                                    <a href="/catalogo/producto.html">
                                        <img src="{{ Storage::url($product->images->first()->url) }}"
                                            class="fill img-fluid" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="{{ Storage::url($product->images->last()->url) }}"
                                            class="top fill img-fluid" alt="Productos del catálogo">
                                    </a>
                                </div>
                                <a href="" style="color: #000; text-decoration: none;">
                                    <h5 class="gelion-bold pt-2 size-product-1">{{ $product->name }}</h5>
                                </a>
                                <li class="gelion-bold">{!! $product->description !!}</li>
                                </li>
                                <li class="gelion-thin">Peso de tela: <span>{{ $product->measure }}</span>
                                </li>
                                <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                </li>
                                <li class="gelion-thin">Regular fit</li>
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
                                            <a href="/catalogo/producto.html">
                                                <img src="{{ Storage::url($product->images->first()->url) }}"
                                                    class="img-fluid" alt="Productos del catálogo">
                                            </a>
                                            <a href="/catalogo/producto.html">
                                                <img src="{{ Storage::url($product->images->last()->url) }}"
                                                    class="top-1 img-fluid" alt="Productos del catálogo">
                                            </a>
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
    @push('js')
        <script src="{{ asset('/js/producto.js') }}"></script>
    @endpush
@endsection
