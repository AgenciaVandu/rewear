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
                                <p class="gelion-bold">{{ __('CORTE') }}</p>
                                @foreach ($categories as $category)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" wire:model="category_id"
                                                    wire:click="getSubcategories" type="radio" name="categories-1"
                                                    value="{{ $category->id }}">
                                                {{ __($category->name) }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">{{ __('TIPO DE MANGA') }}</p>
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
                                <p class="gelion-bold">{{ __('COLORES') }}</p>
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
                                <p class="gelion-bold">{{ __('TALLAS') }}</p>
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
                                <button wire:click="filterClean" class="btn btn-outline-danger btn-sm mt-2">
                                    Limpiar
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
                                    <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
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
                                            <li class="gelion-bold">
                                                {{-- @if (session('locale') == 'es')
                                                    {!! $product->description !!}
                                                @else
                                                    {!! $product->description_en !!}
                                                @endif --}}
                                            </li>
                                            <li class="gelion-thin">Medidas del modelo:
                                                @if (session('locale') == 'es')
                                                    <span>{{ $product->measure }}</span>
                                                @else
                                                    <span>{{ $product->measure_en }}</span>
                                                @endif
                                            </li>
                                            </li>
                                            <li class="gelion-thin">Fit: {{ $product->subcategory->name }}</li>
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
                                <p class="gelion-bold">{{ __('FIT') }}</p>
                                @foreach ($categories as $category)
                                    <div class="form-group d-flex justify-center">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" wire:model="category_id"
                                                    wire:click="getSubcategories" type="radio" name="categories"
                                                    value="{{ $category->id }}">
                                                {{ __($category->name) }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="filtro">
                                <!--Filtro-->
                                <p class="gelion-bold">{{ __('TIPO DE MANGA') }}</p>
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
                                <p class="gelion-bold">{{ __('COLORES') }}</p>
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
                                <p class="gelion-bold">{{ __('TALLAS') }}</p>
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
                                <button wire:click="filter" class="btn btn-se">
                                    {{__('Filtrar')}}
                                </button>
                                <button wire:click="filterClean" class="btn btn-outline-danger btn-sm mt-2">
                                    {{__('Limpiar')}}
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-6 mt-2">
                                    <div class="card espacio-card">
                                        <div class="contenedor-7">
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
                                            <h5 class="gelion-bold pt-2 size-product-1">
                                                @if (session('locale') == 'es')
                                                    {{ $product->name }}
                                                @else
                                                    {{ $product->name_en }}
                                                @endif
                                            </h5>
                                        </a>
                                        <li class="gelion-bold">
                                            {{-- @if (session('locale') == 'es')
                                                {!! $product->description !!}
                                            @else
                                                {!! $product->description_en !!}
                                            @endif --}}
                                        </li>
                                        <li class="gelion-thin">{{__('Peso de tela: ')}}
                                            @if (session('locale') == 'es')
                                                <span>{{ $product->measure }}</span>
                                            @else
                                                <span>{{ $product->measure_en }}</span>
                                            @endif
                                        </li>
                                        <li class="gelion-thin">{{__('Fit: ')}} {{ $product->subcategory->name }}</li>
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
                        <div class="row mb-2">
                            @foreach ($products as $product)
                                <div class="col-6">
                                    <div class="card espacio-card">
                                        <div class="contenedor-2">
                                            @foreach ($product->images as $image)
                                                @if ($image->main == 'si')
                                                    <a href="{{ route('catalogue.product', $product) }}">
                                                        <img src="{{ Storage::url($image->url) }}"
                                                            class="img-fluid" alt="Productos del catálogo">
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                        <a href="" style="color: #000; text-decoration: none;">
                                            <h5 class="gelion-bold pt-2">
                                                @if (session('locale') == 'es')
                                                    {{ $product->name }}
                                                @else
                                                    {{ $product->name_en }}
                                                @endif
                                            </h5>
                                        </a>
                                        <li class="gelion-thin size-product">
                                            {{-- @if (session('locale') == 'es')
                                                {!! $product->description !!}
                                            @else
                                                {!! $product->description_en !!}
                                            @endif --}}
                                        </li>
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
