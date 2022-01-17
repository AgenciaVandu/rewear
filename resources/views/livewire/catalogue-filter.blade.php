<div>
    <div class="content" style="padding-top: 5em;">
        <div class="container">
            <div class="d-none d-sm-none d-md-none d-lg-block">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <!--filtros-->
                        <div class="control-box p-3">
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">FIT</p>
                                @foreach ($categories as $category)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" wire:model="category_id"
                                                    wire:click="getSubcategories" type="radio" name="categories-1"
                                                    value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">TIPO DE MANGA </p>
                                @foreach ($subcategories as $subcategory)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="subcategories-1"
                                                    wire:model="subcategory_id" value="{{ $subcategory->id }}">
                                                {{ $subcategory->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">POR COLOR</p>
                                @foreach ($colors as $color)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="colors-1"
                                                    wire:model="color_id" value="{{ $color->id }}">
                                                <div class="text-center m-auto">
                                                    <div
                                                        style="background-color: {{ $color->bgcolor }}; height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;">
                                                        <span class="icon-hoja-productorewear ico-sm"
                                                            style="color: {{ $color->txtcolor }};"></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">POR TALLA</p>
                                @foreach ($sizes as $size)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="sizes-1"
                                                    wire:model="size_id" value="{{ $size->id }}">
                                                {{ $size->code }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <button wire:click="filter" class="btn btn-secondary">
                                    Filtrar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 col-sm-12">
                        <div class="control-box p-2 breadcrumb">
                            <img src="{{ asset('/img/catalogo/cabecera.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="control-box p-3 main-content">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="card espacio-card">
                                            <div class="contenedor">
                                                <a href="{{ route('catalogue.product',$product) }}">
                                                    <img src="{{ Storage::url($product->images->first()->url) }}"
                                                        class="fill" alt="Productos del catálogo">
                                                </a>
                                                <a href="{{ route('catalogue.product',$product) }}">
                                                    <img src="{{ Storage::url($product->images->last()->url) }}"
                                                        class="top fill" alt="Productos del catálogo">
                                                </a>
                                            </div>
                                            <a href="" style="color: #000; text-decoration: none;">
                                                <h5 class="gelion-bold pt-2">{{ $product->name }}</h5>
                                            </a>
                                            <li class="gelion-bold">{!! $product->description !!}</li>
                                            <li class="gelion-thin">Peso de tela:
                                                <span>{{ $product->measure }}</span>
                                            </li>
                                            <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                            </li>
                                            <li class="gelion-thin">Regular fit</li>
                                            <div class="pt-3 d-flex">
                                                <div class="hoja">
                                                    <img src="{{ asset('/img/catalogo/rewear.svg') }}" alt="">
                                                </div>
                                            </div>
                                            {{-- <div class="pt-3 d-flex">
                                                @foreach ($product->colors as $color)
                                                    <div style="background-color: {{ $color->bgcolor }}; height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;"
                                                        class="mr-1">
                                                        <span class="icon-hoja-productorewear ico-sm"
                                                            style="color: {{ $color->txtcolor }};"></span>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="pt-3 d-flex">
                                                @foreach ($product->sizes as $size)
                                                    <div class="mr-2">
                                                        {{ $size->code }} @if (!$loop->last)
                                                            -
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div> --}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="d-none d-sm-none d-md-block d-lg-none">
                <!--Producto MD-->
                <div class="col-12 pb-4">
                    <img src="{{ asset('/img/catalogo/cabecera.png') }}" class="img-fluid" alt="">
                </div>
                <div class="row">
                    <div class="col-md-3 fixed">
                        <div class="control-box p-3">
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">FIT</p>
                                @foreach ($categories as $category)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" wire:model="category_id"
                                                    wire:click="getSubcategories" type="radio" name="categories"
                                                    value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">TIPO DE MANGA </p>
                                @foreach ($subcategories as $subcategory)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="subcategories"
                                                    wire:model="subcategory_id" value="{{ $subcategory->id }}">
                                                {{ $subcategory->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">POR COLOR</p>
                                @foreach ($colors as $color)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="colors"
                                                    wire:model="color_id" value="{{ $color->id }}">
                                                <div class="text-center m-auto">
                                                    <div
                                                        style="background-color: {{ $color->bgcolor }}; height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;">
                                                        <span class="icon-hoja-productorewear ico-sm"
                                                            style="color: {{ $color->txtcolor }};"></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">POR TALLA</p>
                                @foreach ($sizes as $size)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="sizes"
                                                    wire:model="size_id" value="{{ $size->id }}">
                                                {{ $size->code }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <button wire:click="filter" class="btn btn-secondary">
                                    Filtrar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col">
                                    <div class="card espacio-card">
                                        <div class="contenedor-7">
                                            <a href="{{ route('catalogue.product',$product) }}">
                                                <img src="{{ Storage::url($product->images->first()->url) }}"
                                                    class="fill" alt="Productos del catálogo">
                                            </a>
                                            <a href="{{ route('catalogue.product',$product) }}">
                                                <img src="{{ Storage::url($product->images->last()->url) }}"
                                                    class="top fill" alt="Productos del catálogo">
                                            </a>
                                        </div>
                                        <a href="" style="color: #000; text-decoration: none;">
                                            <h5 class="gelion-bold pt-2 size-product-1">{{ $product->name }}</h5>
                                        </a>
                                        <li class="gelion-bold">{!! $product->description !!}</li>
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
                                        {{-- <div class="pt-3 d-flex">
                                            @foreach ($product->colors as $color)
                                                <div style="background-color: {{ $color->bgcolor }}; height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;"
                                                    class="mr-1">
                                                    <span class="icon-hoja-productorewear ico-sm"
                                                        style="color: {{ $color->txtcolor }};"></span>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="pt-3 d-flex">
                                            @foreach ($product->sizes as $size)
                                                <div class="mr-2">
                                                    {{ $size->code }} @if (!$loop->last)
                                                        -
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none">
                <!--Producto SM-->
                <div class="col-12 pb-4">
                    <img src="{{ asset('/img/catalogo/cabecera.png') }}" class="img-fluid" alt="">
                </div>
                <div class="row">
                    <div class="col-sm-6 pt-4">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-6">
                                    <div class="card espacio-card">
                                        <div class="contenedor-2">
                                            <a href="{{ route('catalogue.product',$product) }}">
                                                <img src="{{ Storage::url($product->images->first()->url) }}"
                                                    class="img-fluid" alt="Productos del catálogo">
                                            </a>
                                            <a href="{{ route('catalogue.product',$product) }}">
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
    </div>
</div>
