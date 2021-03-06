<div>
    {{-- @php
        // SDK de Mercado Pago
        require base_path('/vendor/autoload.php');
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();
        $shipments = new MercadoPago\Shipments();

        $shipments->cost = $order->shipping_cost;
        $shipments->mode = 'not_specified';

        $preference->shipments = $shipments;
        // Crea un ítem en la preferencia
        foreach ($items as $product) {
            $item = new MercadoPago\Item();
            $item->title = $product->name;
            $item->quantity = $product->qty;
            $item->unit_price = $product->price;

            $products[] = $item;
        }
        //Rutas de redireccion segun el caso
        $preference->back_urls = [
            'success' => route('orders.pay', $order),
            'failure' => 'http://www.tu-sitio/failure',
            'pending' => 'http://www.tu-sitio/pending',
        ];
        $preference->auto_return = 'approved';

        $preference->items = $products;
        $preference->save();
    @endphp --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-6 container py-8">
        <div class="order-2 lg:order-1 col-span-1 xl:col-span-3">
            <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6">
                <p class="text-trueGray-700 uppercase">
                    <span class="font-semibold">Número de orden:</span> Orden-{{ $order->id }}
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <p class="text-lg font-semibold uppercase">
                            Envío
                        </p>
                        @if ($order->shipping_type == 1)
                            <p class="text-sm">Los productos deben ser recogidos en tienda</p>
                            <p class="text-sm">Calle falsa 123</p>
                        @else
                            <p class="text-sm">Los productos serán enviados a</p>
                            <p class="text-sm">{{ $envio->address }}</p>
                            <p>{{ $envio->department }} - {{ $envio->city }} -
                                {{ $envio->district }}</p>
                        @endif
                    </div>
                    <div>
                        <p class="text-lg font-semibold uppercase">
                            Datos de contacto
                        </p>
                        <p class="text-sm">
                            Persona que recibirá el producto: {{ $order->contact }}
                        </p>
                        <p class="text-sm">
                            Telefono de contacto: {{ $order->phone }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 text-trueGray-700 mb-6">
                <p class="text-xl font-semibold mb-4">Resumen</p>

                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Precio</th>
                            <th>Cant</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($items as $product)
                            <tr>
                                <td>
                                    <div class="flex">
                                        <img src="{{ $product->options->image }}" alt=""
                                            class="h-15 w-20 object-cover mr-4">
                                        <article>
                                            <h1 class="font-bold">{{ $product->name }}</h1>
                                            <div class="flex text-xs">
                                                @isset($product->options->color)
                                                    Color: {{ __($product->options->color) }}
                                                @endisset

                                                @isset($product->options->size)
                                                    Talla: {{ __($product->options->size) }}
                                                @endisset
                                            </div>
                                        </article>
                                    </div>
                                </td>
                                <td class="text-center">
                                    {{ $product->price }} USD
                                </td>
                                <td class="text-center">
                                    {{ $product->qty }}
                                </td>
                                <td class="text-center">
                                    {{ $product->price * $product->qty }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

        <div class="order-1 lg:order-2 col-span-1 xl:col-span-2">
            <div class="bg-white rounded-lg shadow-lg p-9">
                <div>
                    <div class="text-center mb-2 bg-trueGray-900 text-white">
                        <h2 class="font-semibold text-xl">Metodos de pago</h2>
                    </div>
                    <div class="text-trueGray-700 mt-4">
                        <p class="font-semibold text-sm">
                            Subtotal: {{ $order->total - $order->shipping_cost }} USD
                        </p>
                        <p class="font-semibold text-sm">
                            Envio: {{ $order->shipping_cost }} USD
                        </p>
                        <p class="font-semibold uppercase text-lg">
                            Total: {{ $order->total }} USD
                        </p>
                    </div>

                    <div class="flex items-center justify-center py-4">
                        <i class="fab fa-cc-visa text-4xl text-trueGray-700 mx-1"></i>
                        <i class="fab fa-cc-mastercard text-4xl text-trueGray-700 mx-1"></i>
                        <i class="fab fa-cc-amex text-4xl text-trueGray-700 mx-1"></i>
                        <i class="fab fa-cc-discover text-4xl text-trueGray-700 mx-1"></i>
                    </div>
                </div>
                <div class="text-center">
                    {{-- Botton de Mercado Pago --}}
                    {{-- <div class="cho-container my-2">
                    </div> --}}
                    <hr class="divide-y divide-gray-400">
                    <!-- Set up a container element for the button -->
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        {{-- <script src="https://sdk.mercadopago.com/js/v2"></script>
        <script>
            // Agrega credenciales de SDK
            const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
                locale: 'es-AR'
            });

            // Inicializa el checkout
            mp.checkout({
                preference: {
                    id: "{{ $preference->id }}"
                },
                render: {
                    container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                    label: 'Pagar con Mercado Pago', // Cambia el texto del botón de pago (opcional)
                }
            });
        </script> --}}
        <!-- Include the PayPal JavaScript SDK; replace "test" with your own sandbox Business account app client ID -->
        <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency=MXN">
        </script>

        <script>
            paypal.Buttons({
                // Sets up the transaction when a payment button is clicked
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: "{{ $order->total }}" // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                            }
                        }]
                    });
                },
                // Finalize the transaction after payer approval
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(orderData) {
                        livewire.emit('payOrder');
                        /* console.log(orderData);
                        // Successful capture! For dev/demo purposes:
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        var transaction = orderData.purchase_units[0].payments.captures[0];
                        alert('Transaction ' + transaction.status + ': ' + transaction.id +
                        '\n\nSee console for all available details'); */
                        // When ready to go live, remove the alert and show a success message within this page. For example:
                        // var element = document.getElementById('paypal-button-container');
                        // element.innerHTML = '';
                        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                        // Or go to another URL:  actions.redirect('thank_you.html');
                    });
                }
            }).render('#paypal-button-container');
        </script>
    @endpush
</div>
