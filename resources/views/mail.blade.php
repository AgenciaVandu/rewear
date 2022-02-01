<!DOCTYPE html>
<html>

<head>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    td {
        text-align: center;
    }

</style>

<body>
    <div style="text-align: center;">
        <img src="{{ asset('img/rewear-azul.svg') }}" alt="">
    </div>

    <h3 style="text-align: left;">Numero de orden: {{ $order->id }}</h3>
    <h3 style="text-align: left;">Tipo de plan: {{ $order->plan_name }}</h3>

    <p>
        <b>Cliente:</b> {{ $order->contact }}<br>
        <b>Telefono:</b> {{ $order->phone }}<br>
        @if ($order->bussiness)
            <b>Empresa:</b> {{ $order->bussiness }}<br>
        @endif
        <b>Direccion:</b> {{ $envio->address }} {{ $envio->city }} - {{ $envio->state }}
        CP:{{ $envio->postal_code }}
    </p>

    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>SKU</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->boxes as $box)
                @php
                    $products = json_decode($box->content);
                @endphp
                <tr style="background-color:black; color:white;">
                    <td>
                        <b>Caja {{ $loop->iteration }}</b>
                    </td>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div>
                                {{-- <img style="width:3.5rem; margin-top: 0.5rem" src="{{ asset($product->options->image) }}"> --}}
                                <article>
                                    <p>{{ $product->name }}</p>
                                    <small>
                                        @isset($product->options->color)
                                            Color: {{ __($product->options->color) }}
                                        @endisset

                                        @isset($product->options->size)
                                            Talla: {{ __($product->options->size) }}
                                        @endisset
                                        <br>
                                    </small>
                                </article>
                            </div>
                        </td>
                        <td>{{ $product->qty }}</td>
                        @if ($product->options->manga == 'corta' || $product->options->manga == 'Corta')
                            <td>${{ number_format($order->currency_value, 2) }} {{ $order->currency }}</td>
                        @else
                            <td>${{ number_format($order->currency_value_L, 2) }} {{ $order->currency }}</td>
                        @endif
                        <td>{{ $product->options->sku }}</td>
                    </tr>
                @endforeach
            @endforeach
            <tr class="text-center">
                <td></td>
                <td></td>
                <td>
                    <span class="font-bold border-b-2 border-black">
                        <b>Total: ${{ number_format($order->total, 2) }} {{ $order->currency }}</b>
                    </span>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
