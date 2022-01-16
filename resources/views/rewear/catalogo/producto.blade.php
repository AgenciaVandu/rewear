@extends('layouts.rewear-azul')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/products.css') }}">
        <link rel="stylesheet" href="{{ asset('/lib/icomoon-v1.0/style.css') }}">
    @endpush
    <section id="product">
        <div class="container">
            <div class="product-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 espacio-pr">
                        <div class="d-none d-sm-none d-md-none d-lg-block">
                            <div class="row boton-producto">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    @foreach ($product->images as $image)
                                        <div class="lateral @if ($loop->iteration != 1) btn-pad @endif">
                                            <button type="button" id="i-{{ $loop->iteration }}">
                                                <img src="{{ Storage::url($image->url) }}" class="fill" alt="">
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    @foreach ($product->images as $image)
                                        <div class="principal" id="p{{ $loop->iteration }}">
                                            <img src="{{ Storage::url($image->url) }}" class="fill" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--Movil images-->
                        <div class="d-block d-sm-block d-md-block d-lg-none">
                            <!--movil-->
                            <div class="carousel">
                                <div class="carousel__contenedor">
                                    <div class="carousel__lista text-center">
                                        @foreach ($product->images as $image)
                                            <div class="carousel__elemento m-1">
                                                <img src="{{ Storage::url($image->url) }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div role="tabList" class="carousel__indicadores1"></div>
                            </div>
                        </div>
                        <!--Movil images-->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h1 class="gelion-bold">{{ $product->name }}</h1>
                        <p class="gelion-thin" style="color: gray;">{!! $product->description !!}</p>
                        <li class="gelion-bold pt-2">
                            <div class="row">
                                <div class="col">
                                    Medidas de la modelo:
                                </div>
                                <div class="col-8 gelion-thin">
                                    {{ $product->measure }}
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3">
                            <div class="row">
                                <div class="col">
                                    Talla de la modelo:
                                </div>
                                <div class="col-8 gelion-thin">
                                    S
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3">
                            <div class="row">
                                <div class="col m-auto">
                                    Colores disponibles
                                </div>
                                <div class="col-8 gelion-thin">
                                    <div class="btn-group">
                                        <button class="btn btn-success btn-sm dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            Elige un color
                                        </button>
                                        <div class="dropdown-menu modelos-dropdown">
                                            <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                                                <label class="btn btn-outline-dark">
                                                    <input type="checkbox" name="countries[]" value="negro"
                                                        autocomplete="off"> Negro
                                                </label>
                                                <label class="btn btn-outline-dark">
                                                    <input type="checkbox" name="countries[]" value="negro"
                                                        autocomplete="off"> Rojo
                                                </label>
                                                <label class="btn btn-outline-dark">
                                                    <input type="checkbox" name="countries[]" value="negro"
                                                        autocomplete="off">Natural
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bol pt-3 sizes gelion-regular">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-dark">
                                    <input type="checkbox" name="talla" value="Small" autocomplete="off" checked> S
                                </label>
                            </div>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-dark">
                                    <input type="checkbox" name="talla" value="Medium" autocomplete="off"> M
                                </label>
                            </div>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-dark">
                                    <input type="checkbox" name="talla" value="Large" autocomplete="off"> L
                                </label>
                            </div>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-dark">
                                    <input type="checkbox" name="talla" value="Xtra-large" autocomplete="off"> XL
                                </label>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3 text-left productos-carrito">
                            <div class="row pb-2">
                                <div class="col-1">
                                    <div style="background-color: #003057; height: 30px; width: 30px; border-radius: 30px;">
                                        <span class="icon-hoja-productorewear ico-xs" style="color: #fff;"></span>
                                    </div>
                                </div>
                                <div class="col m-auto">
                                    <div id="productos-carrito">
                                        <input id="menos" type="button" name="minus" value="-" onclick="minus(1)">
                                        <input id="cantidad" type="text" name="amount" value="6">
                                        <input id="mas" type="button" name="plus" value="+" onclick="plus(1)">
                                    </div>
                                </div>
                            </div>
                            <small class="gelion-regular">* Se agregarán en múltipos de 6</small>
                        </li>
                        <li class="gelion-bold pt-3"><a href="" style="color: #000; text-decoration: none;">Descargar
                                PDF</a></li>
                        <li class="gelion-bold pt-3">
                            <div class="row">
                                <div class="col">
                                    <a href="/catalogo/cart.html" class="btn btn-secondary">
                                        Agregar prenda
                                    </a>

                                </div>
                                <div class="col gelion-bold m-auto">
                                    <a href="" style="color: #000; text-decoration: none;"> Tabla de medidas</a>
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3">
                            <p><img src="/img/catalogo/hoja-1.svg" alt="Producto ecológico">
                                <span class="pl-2 m-auto">
                                    50% algodón reciclado, 50% poliéster reciclado.
                                </span>
                            </p>
                        </li>
                        <li class="gelion-bold pt-1">
                            Compartir:
                            <div class="row pt-2">
                                <div class="col-12">
                                    <a class="btn btn-outline-dark m-auto pr-4 pl-4">
                                        <i class="fab fa-facebook-f pb-1 pr-2"></i>Facebook
                                    </a>
                                    <a class="btn btn-outline-dark m-auto pr-4 pl-4">
                                        <i class="fab fa-whatsapp pb-1 pr-2"></i>Whatsapp
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="pt-4">
                            <img src="{{ asset('/img/catalogo/Etiqueta-de-lavado.png') }}" class="img-fluid" alt="">
                        </li>
                    </div>
                </div>
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
