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
                                    <label for="formGroupExampleInput">Nombres*</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="col gelion-bold">
                                    <label for="formGroupExampleInput">Apellidos*</label>
                                    <input type="text" class="form-control" name="laste_name" id="apellidos" required>
                                </div>
                                <div class="col gelion-bold">
                                    <label for="phone">Phone:</label>
                                    <input type="text" id="phone" class="form-control" name="phone" required>
                                </div>
                            </div>
                            <div class="pt-3 gelion-bold" id="f-emprendedor">
                                <!--Emprendedor-->
                                <label for="formGroupExampleInput">Nombre de tu empresa (opcional)</label>
                                <input type="text" class="form-control" name="bussines">
                            </div>
                            <div class="form-group gelion-bold pt-3">
                                <label for="inputAddress">Dirección</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="8mile"
                                    name="address" required>
                            </div>
                            <div class="form-group gelion-bold">
                                <label for="inputCity">Ciudad</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="México" name="city"
                                    required>
                            </div>
                            <div class="form-group gelion-bold">
                                <label for="inputCity">Estado</label>
                                <input type="text" class="form-control" id="inputState" placeholder="México" name="state"
                                    required>
                            </div>
                            <div class="form-group gelion-bold">
                                <label for="inputCity">Código postal</label>
                                <input type="text" class="form-control" id="inputState" placeholder="México"
                                    name="postal_code" required>
                            </div>
                            <div class="mb-3 gelion-bold">
                                <label for="validationTextarea">Mensaje</label>
                                <textarea class="form-control" id="validationTextarea" placeholder="Déjanos tu mensaje"
                                    name="message" required></textarea>
                            </div>
                            <div type="submit" class="btn btn-primary gelion-bold mt-2">Regresar</div>

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
                                @php
                                    switch (session()->get('divisa')) {
                                        case 'MXN':
                                            $mon = 'MXN';
                                            break;
                                        case 'USD':
                                            $mon = 'USD';
                                            break;
                                        case '':
                                            $mon = 'USD';
                                            break;
                                    }
                                @endphp
                                <div class="col-6 text-right">
                                    <p class="gelion-thin">
                                        ${{ number_format((Cart::instance('caja1')->subtotal() + Cart::instance('caja2')->subtotal() + Cart::instance('caja3')->subtotal() + Cart::instance('caja4')->subtotal()) * $plan->$mon, 2) }}
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="gelion-thin">
                                        Impuestos
                                    </p>
                                </div>
                                <div class="col-6 text-right">
                                    <p class="gelion-thin">
                                        ${{ number_format((Cart::instance('caja1')->tax(16) + Cart::instance('caja2')->tax(16) + Cart::instance('caja3')->tax(16) + Cart::instance('caja4')->tax(16)) * $plan->$mon, 2) }}
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="gelion-thin">
                                        Precio total
                                    </p>
                                </div>
                                <div class="col-6 text-right">
                                    <p class="gelion-thin">
                                        ${{ number_format((Cart::instance('caja1')->total() + Cart::instance('caja2')->total() + Cart::instance('caja3')->total() + Cart::instance('caja4')->total()) * $plan->$mon, 2) }}
                                    </p>
                                </div>
                            </div>
                            @switch(session()->get('plan'))
                                @case(1)
                                    @if (Cart::instance('caja1')->count() == 72)
                                        <div class="gelion-bold mt-2">
                                            <button class="btn btn-secondary d-block" type="submit">Comprar
                                                ahora</button>
                                        </div>
                                    @else
                                        <div class="btn btn-secondary gelion-bold mt-2 disabled">Comprar ahora</div>
                                    @endif
                                @break
                                @case(2)
                                    @if (Cart::instance('caja1')->count() + Cart::instance('caja2')->count() + Cart::instance('caja3')->count() == 144 || Cart::instance('caja1')->count() + Cart::instance('caja2')->count() + Cart::instance('caja3')->count() == 216)
                                        <div class="gelion-bold mt-2">
                                            <button class="btn btn-secondary d-block" type="submit">Comprar
                                                ahora</button>
                                        </div>
                                    @else
                                        <div class="btn btn-secondary gelion-bold mt-2 disabled">Comprar ahora</div>
                                    @endif
                                @break
                                @case(3)
                                    @if (Cart::instance('caja1')->count() + Cart::instance('caja2')->count() + Cart::instance('caja3')->count() + Cart::instance('caja4')->count() == 288)
                                        <div class="gelion-bold mt-2">
                                            <button class="btn btn-secondary d-block" type="submit">Comprar
                                                ahora</button>
                                        </div>
                                    @else
                                        <div class="btn btn-secondary gelion-bold mt-2 disabled">Comprar ahora</div>
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
                            <p>Política de privacidad:</p>
                            <p class="gelion-thin size-2 text-justify">Como parte de los mecanismos para manifestar negativa
                                al tratamiento de datos personales, en todo momento podrá consultar su información,
                                rectificarla u oponerte al tratamiento de tus datos personales, por lo que para ello podrá
                                llamar a los teléfonos (999) 999 9999 o contacto@myrewear.com</p>
                        </div>
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
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card espacio-card">
                            <div class="contenedor-1">
                                <a href="">
                                    <img src="{{ asset('/img/catalogo/producto-2.png') }}" class="img-fluid"
                                        alt="Productos del catálogo">
                                </a>
                                <a href="">
                                    <img src="{{ asset('/img/catalogo/producto.png') }}" class="top img-fluid"
                                        alt="Productos del catálogo">
                                </a>
                            </div>
                            <a href="" style="color: #000; text-decoration: none;">
                                <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                            </a>
                            <li class="gelion-bold size-2">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado
                            </li>
                            <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
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
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card espacio-card">
                            <div class="contenedor-1">
                                <a href="">
                                    <img src="{{ asset('/img/catalogo/producto-2.png') }}" class="img-fluid"
                                        alt="Productos del catálogo">
                                </a>
                                <a href="">
                                    <img src="{{ asset('/img/catalogo/producto.png') }}" class="top img-fluid"
                                        alt="Productos del catálogo">
                                </a>
                            </div>
                            <a href="" style="color: #000; text-decoration: none;">
                                <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                            </a>
                            <li class="gelion-bold size-2">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado
                            </li>
                            <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
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
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card espacio-card">
                            <div class="contenedor-1">
                                <a href="">
                                    <img src="{{ asset('/img/catalogo/producto-2.png') }}" class="img-fluid"
                                        alt="Productos del catálogo">
                                </a>
                                <a href="">
                                    <img src="{{ asset('/img/catalogo/producto.png') }}" class="top img-fluid"
                                        alt="Productos del catálogo">
                                </a>
                            </div>
                            <a href="" style="color: #000; text-decoration: none;">
                                <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                            </a>
                            <li class="gelion-bold size-2">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado
                            </li>
                            <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
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
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card espacio-card">
                            <div class="contenedor-1">
                                <a href="">
                                    <img src="{{ asset('/img/catalogo/producto-2.png') }}" class="img-fluid"
                                        alt="Productos del catálogo">
                                </a>
                                <a href="">
                                    <img src="{{ asset('/img/catalogo/producto.png') }}" class="top img-fluid"
                                        alt="Productos del catálogo">
                                </a>
                            </div>
                            <a href="" style="color: #000; text-decoration: none;">
                                <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                            </a>
                            <li class="gelion-bold size-2">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado
                            </li>
                            <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
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
                </div>
            </div>
            <div class="d-none d-sm-none d-md-block d-lg-none">
                <!--Producto MD-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card espacio-card">
                            <div class="contenedor-4">
                                <a href="/catalogo/producto.html">
                                    <img src="{{ asset('/img/catalogo/producto-2.png') }}" class="fill"
                                        alt="Productos del catálogo">
                                </a>
                                <a href="/catalogo/producto.html">
                                    <img src="{{ asset('/img/catalogo/producto.png') }}" class="top fill"
                                        alt="Productos del catálogo">
                                </a>
                            </div>
                            <a href="" style="color: #000; text-decoration: none;">
                                <h5 class="gelion-bold pt-2 size-product-1">Modelo Bahía</h5>
                            </a>
                            <li class="gelion-bold">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado
                            </li>
                            <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
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
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none">
                <!--Producto SM-->
                <div class="row">
                    <div class="col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="card espacio-card">
                                    <div class="contenedor-2">
                                        <a href="/catalogo/producto.html">
                                            <img src="{{ asset('/img/catalogo/producto-2.png') }}"
                                                class="img-fluid" alt="Productos del catálogo">
                                        </a>
                                        <a href="/catalogo/producto.html">
                                            <img src="{{ asset('/img/catalogo/producto.png') }}" class="top-1 img-fluid"
                                                alt="Productos del catálogo">
                                        </a>
                                    </div>
                                    <a href="" style="color: #000; text-decoration: none;">
                                        <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                    </a>
                                    <li class="gelion-thin size-product">50% Algodón reciclado pre consumo + 50% poliéster
                                        reciclado</li>
                                    <!--<li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                                     </li>
                                                     <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                                     </li>
                                                     <li class="gelion-thin">Regular fit</li>-->
                                    <div class="pt-3 d-flex">
                                        <div class="hoja">
                                            <img src="{{ asset('/img/catalogo/rewear.svg') }}" alt="">
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card espacio-card">
                                    <div class="contenedor-2">
                                        <a href="/catalogo/producto.html">
                                            <img src="{{ asset('/img/catalogo/producto-2.png') }}"
                                                class="img-fluid" alt="Productos del catálogo">
                                        </a>
                                        <a href="/catalogo/producto.html">
                                            <img src="{{ asset('/img/catalogo/producto.png') }}" class="top-1 img-fluid"
                                                alt="Productos del catálogo">
                                        </a>
                                    </div>
                                    <a href="" style="color: #000; text-decoration: none;">
                                        <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                    </a>
                                    <li class="gelion-thin size-product">50% Algodón reciclado pre consumo + 50% poliéster
                                        reciclado</li>
                                    <!--<li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                                     </li>
                                                     <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                                     </li>
                                                     <li class="gelion-thin">Regular fit</li>-->
                                    <div class="pt-3 d-flex">
                                        <div class="hoja">
                                            <img src="{{ asset('/img/catalogo/rewear.svg') }}" alt="">
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="card espacio-card">
                                    <div class="contenedor-2">
                                        <a href="/catalogo/producto.html">
                                            <img src="{{ asset('/img/catalogo/producto-2.png') }}"
                                                class="img-fluid" alt="Productos del catálogo">
                                        </a>
                                        <a href="/catalogo/producto.html">
                                            <img src="{{ asset('/img/catalogo/producto.png') }}" class="top-1 img-fluid"
                                                alt="Productos del catálogo">
                                        </a>
                                    </div>
                                    <a href="" style="color: #000; text-decoration: none;">
                                        <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                    </a>
                                    <li class="gelion-thin size-product">50% Algodón reciclado pre consumo + 50% poliéster
                                        reciclado</li>
                                    <!--<li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                                     </li>
                                                     <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                                     </li>
                                                     <li class="gelion-thin">Regular fit</li>-->
                                    <div class="pt-3 d-flex">
                                        <div class="hoja">
                                            <img src="{{ asset('/img/catalogo/rewear.svg') }}" alt="">
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card espacio-card">
                                    <div class="contenedor-2">
                                        <a href="/catalogo/producto.html">
                                            <img src="{{ asset('/img/catalogo/producto-2.png') }}"
                                                class="img-fluid" alt="Productos del catálogo">
                                        </a>
                                        <a href="/catalogo/producto.html">
                                            <img src="{{ asset('/img/catalogo/producto.png') }}" class="top-1 img-fluid"
                                                alt="Productos del catálogo">
                                        </a>
                                    </div>
                                    <a href="" style="color: #000; text-decoration: none;">
                                        <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                    </a>
                                    <li class="gelion-thin size-product">50% Algodón reciclado pre consumo + 50% poliéster
                                        reciclado</li>
                                    <!--<li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                                     </li>
                                                     <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                                     </li>
                                                     <li class="gelion-thin">Regular fit</li>-->
                                    <div class="pt-3 d-flex">
                                        <div class="hoja">
                                            <img src="{{ asset('/img/catalogo/rewear.svg') }}" alt="">
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
