<div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 espacio-pr">
        <div class="d-none d-sm-none d-md-none d-lg-block">
            <div class="row boton-producto">
                @if (!$color_id)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        @foreach ($images as $image)
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
                @else
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        @foreach ($imagesColor as $image)
                            <div class="lateral @if ($loop->iteration != 1) btn-pad @endif">
                                <button type="button" id="i-{{ $loop->iteration }}">
                                    <img src="{{ Storage::url($image->url) }}" class="fill" alt="">
                                </button>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        @foreach ($imagesColor as $image)
                            <div class="principal" id="p{{ $loop->iteration }}">
                                <img src="{{ Storage::url($image->url) }}" class="fill" alt="">
                            </div>
                        @endforeach
                    </div>
                @endif
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
                                <img src="{{ Storage::url($image->url) }}" class="img-fluid" alt="">
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
        @if (session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show " role="alert">
                {!! session('message') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <h1 class="gelion-bold">{{ $product->name }}</h1>
        <p class="gelion-thin" style="color: gray;">{!! $product->description !!}</p>
        <li class="gelion-bold pt-2">
            <div class="row">
                <div class="col">
                    Medidas del modelo:
                </div>
                <div class="col-8 gelion-thin">
                    {{ $product->measure }}
                </div>
            </div>
        </li>
        <li class="gelion-bold pt-3">
            <div class="row">
                <div class="col">
                    Talla del modelo:
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
                    {{ $color_id }}
                </div>
                <div class="col-8 gelion-thin">
                    <div class="btn-group">
                        <select wire:model="color_id" class="form-control form-control-sm">
                            <option value="" disabled selected>Selecciones un color</option>
                            @foreach ($product->colors as $color)
                                <option class="text-capitalize" value="{{ $color->pivot->id }}">
                                    {{ __($color->name) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </li>
        <li class="gelion-bol pt-3 sizes gelion-regular">
            <div class="btn-group btn-group-toggle" data-toggle="buttons" wire:ignore>
                @foreach ($product->sizes as $size)
                    <label class="btn btn-outline-dark">
                        <input type="radio" wire:model="size_id" name="sizes" value="{{ $size->id }}">
                        {{ $size->code }}
                    </label>
                @endforeach
            </div>
            {{ $size_id }}
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
                        <input id="menos" type="button" value="-" wire:click="decrement">
                        <input id="cantidad" type="text" name="amount" disabled value="{{ $qty }}">
                        <input id="mas" type="button" value="+" wire:click="increment">
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

                    <button wire:click="addItems" class="btn btn-secondary" @if (!($color_id && $size_id)) disabled @endif>
                        Agregar prenda
                    </button>

                    {{-- @foreach (Cart::instance('caja1')->content() as $item)
                        {{ $item->options->size_id }}
                    @endforeach --}}

                    {{ $color_limite }}
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
