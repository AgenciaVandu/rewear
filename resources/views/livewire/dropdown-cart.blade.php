<div>
    @if (session()->has('plan'))
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                style="color: #003057;" aria-expanded="false">
                <i class="fas fa-shopping-bag"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <div class="gelion-bold pl-3 pt-2 text-left" style="color: #000">
                    <small> Plan {{ $plan->name }} <span class="gelion-thin">| hasta 72 piezas</span> agregadas
                        {{ Cart::instance('caja1')->count() }}</small>
                </div>
                <li>
                    <div class="contenid-bag">
                        @switch(session()->get('plan'))
                            @case(1)
                                @foreach (Cart::instance('caja1')->content() as $item)
                                    <div class="row pt-3">
                                        <div class="col-3">
                                            <div class="contenedor-bag">
                                                <img src="{{ $item->options->image }}" class="fill" alt="">
                                                <button class="gelion-thin size-2 eliminar" type="button">Eliminar</button>
                                            </div>
                                        </div>
                                        <div class="col-9 m-auto text-left">
                                            <span class="titulo gelion-bold modelo" style="color: #000;">
                                                {{ $item->name }}
                                            </span> <br>
                                            <span class="pieza gelion-thin size" style="color: #000;">
                                                <small>Talla: {{ $item->options->size }} - Color:
                                                    {{ $item->options->color }}</small>
                                            </span> <br>
                                            <span class="pieza gelion-thin size" style="color: #000">
                                                {{ $item->qty }} piezas
                                            </span> <br>

                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            @break
                            @case(2)

                            @break
                            @default

                        @endswitch
                    </div>
                </li>
                <a href="/catalogo/cart.html" class="btn btn-primary btn-block">Ver todo</a>
            </div>
        </div>
    @endif

    {{-- <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
                <x-cart size="28" color="white" />
                @if (Cart::count())
                    <span
                        class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ Cart::count() }}</span>
                @else
                    <span
                        class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
                @endif
            </span>
        </x-slot>

        <x-slot name="content">
            <ul>
                @forelse (Cart::content() as $item)
                    <li class="flex p-3 border-b border-gray-200 mb-2">
                        <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">
                        <article class="flex-1">
                            <h1 class="font-bold">{{ $item->name }}</h1>
                            <div class="flex">
                                <p class="text-sm">Cant: {{ $item->qty }}</p>
                                @isset($item->options['color'])
                                    <p class="mx-2 text-sm capitalize">- Color: {{ __($item->options['color']) }}</p>
                                @endisset
                                @isset($item->options['size'])
                                    <p class="mr-1 text-sm capitalize">- {{ __($item->options['size']) }}</p>
                                @endisset
                            </div>
                            <p>USD: ${{ $item->price }}</p>
                        </article>
                    </li>
                @empty
                    <li class="px-6 py-4">
                        <p class="text-center text-gray-700">
                            No tiene agregado ningún item en el carrito
                        </p>
                    </li>
                @endforelse
            </ul>
            @if (Cart::count())
                <div class="py-2 px-3">
                    <p><span class="text-lg font-bold text-trueGray-700 mt-2">Total:</span> USD
                        ${{ Cart::subtotal() }}</p>
                </div>
                <x-button-link color="trueGray" href="{{ route('shopping-cart') }}" class="w-full">
                    Ir al carrito de compras
                </x-button-link>
            @endif
        </x-slot>
    </x-jet-dropdown> --}}
</div>
