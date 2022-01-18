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
                                                    144
                                                @break
                                                @case(3)
                                                    288
                                                @break

                                            @endswitch ${{ $plan->price }}/pieza
                                        </li>
                                        <li class="gelion-thin">Faltan 12 para completar</li>
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
                                @foreach (Cart::instance('caja1')->content() as $item)
                                    <tr class="text-center">
                                        <!--producto-->
                                        <td>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-6" id="cesta">
                                                    <img src="{{ $item->options->image }}" class="fill-fit w-5">
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-6 text-left m-auto pt-2">
                                                    <p class="gelion-bold size-3">{{ $item->name }} <br>
                                                        <span>
                                                            <a href="" class="size-2 gelion-thin"
                                                                style="text-decoration: none; color: #000;">Eliminar</a>
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
                            <p class="gelion-thin">
                                ${{ Cart::subtotal(2, '.', ',') }}
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="gelion-thin">
                                Impuestos
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            <p class="gelion-thin">
                                ${{ Cart::tax(2, '.', ',') }}
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="gelion-thin">
                                Precio total
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            <p class="gelion-thin">
                                ${{ Cart::total(2, '.', ',') }}
                            </p>
                        </div>
                    </div>
                    <div class="btn btn-secondary gelion-bold mt-2">Comprar ahora</div>
                    <div class="col-12 gelion-bold text-center pt-3">
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
                    </div>
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
