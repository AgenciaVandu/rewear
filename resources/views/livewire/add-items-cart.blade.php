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
                    <select class="form-control form-control-sm">
                        <option value="" disabled selected>Selecciones un color</option>
                        @foreach ($product->colors as $color)
                            <option class="text-capitalize" value="{{ $color->id }}">{{ __($color->name) }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </li>
    <li class="gelion-bol pt-3 sizes gelion-regular">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            @foreach ($product->sizes as $size)
                <label class="btn btn-outline-dark">
                    <input type="radio" name="sizes" value="{{ $size->id }}"> {{ $size->code }}
                </label>
            @endforeach
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
                    <input id="menos" type="button" value="-" >
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
