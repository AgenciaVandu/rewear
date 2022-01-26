@extends('layouts.rewear')
@section('content')
    <header>
        <div class="contenido-boton">
            @if (session()->get('locale') == 'es')
                <video id="portada" src="{{ asset('img/portada.mp4') }}" muted no-controls loop autoplay
                    class="w-100"></video>
            @else
                <video id="portada" src="{{ asset('img/portadaENG.mp4') }}" muted no-controls loop autoplay
                    class="w-100"></video>
            @endif
            <div class="boton-h">
                <a href="{{ route('catalogue.index') }}" id="boton-h"
                    class="btn btn-warning gelion-bold">{{ __('Ver productos') }}</a>
            </div>
        </div>
    </header>
    <section>
        <div class="bg-1">
            <div class="container text-center pt-4 espacio-1">
                <h2 class="gelion-bold">{{ __('Tenemos un compromiso con el planeta') }} </h2>
                <p class="gelion-light size mx-5">
                    {{ __('Creamos las mejores prendas hechas de materiales 100% reciclados con hilo certificado por Global Recycled Standard.') }}
                </p>
                <div class="row text-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 contenido-imagen">
                        <img src="{{ Storage::url($hombre->image) }}" class="img-fluid" alt="">
                        <div class="boton-i">
                            <a href="{{ route('catalogue.index') }}" class="btn btn-primary gelion-bold">{{ __('ORDENAR AHORA') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 contenido-imagen">
                        <img src="{{ Storage::url($mujer->image) }}" class="img-fluid" alt="">
                        <div class="boton-i">
                            <a href="{{ route('catalogue.index') }}" class="btn btn-primary gelion-bold">{{ __('ORDENAR AHORA') }}</a>
                        </div>
                    </div>
                </div>
                <div>
                    <!--colores-->
                    <div class="carousel">
                        <div class="carousel__contenedor">
                            <div class="carousel__lista4">
                                @foreach ($colors as $color)
                                    <div class="carousel__elemento m-1">
                                        <a href="">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{ route('catalogue.index', $color->id) }}">
                                                        <img src="{{ Storage::url($color->image) }}"
                                                            class="img-fluid"></a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div role="tabList" class="carousel__indicadores1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="planes">
        <div class="bg-2">
            <div class="container text-center">
                <h1 class="gelion-bold">{{ __('Colores que aman la vida') }}</h1>
                <p class="gelion-light size">
                    {{ __('Cada color genera un impacto positivo con el medio ambiente ya que nuestro proceso ahorra miles de litros de agua y no utiliza tintes o químicos para teñir.') }}
                </p>
                <a href="{{ route('about') }}" class="btn btn-secondary gelion-bold">{{ __('CONOCE MÁS') }}</a>
            </div>
            <div class="bg-3 mt-5 pt-5">
                <!--bg-azul-->
                <h1 class="gelion-bold text-center" style="color: #fff;">
                    {{ __('Cambia al mundo con cada camiseta. Arma tus cajas.') }}
                </h1>
                <div class="container">
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <div class="row pt-5">
                            <div class="col-6 left-o">
                                <img src="{{ asset('/img/index/hoja.svg') }}" alt="">
                                <h5 class="gelion-bold pt-3" style="color: #fff;">{{ __('Elige de 6 en 6 piezas') }}</h5>
                                <p class="gelion-thin" style="color: #fff;">
                                    {{ __('Configura tus cajas eligiendo de 6 en 6') }}
                                    piezas por talla y color.</p>
                            </div>
                            <div class="col-6 left-o">
                                <img src="{{ asset('/img/index/hoja.svg') }}" alt="">
                                <h5 class="gelion-bold pt-3" style="color: #fff;">{{ __('Todas las tallas') }}</h5>
                                <p class="gelion-thin" style="color: #fff;">
                                    {{ __('Elige todas las tallas que quieras (S-M-L-XL) siguiendo un orden de 6 en 6 piezas.') }}
                                </p>
                            </div>
                            <div class="col-6 left-o">
                                <img src="{{ asset('/img/index/hoja.svg') }}" alt="">
                                <h5 class="gelion-bold pt-3" style="color: #fff;">{{ __('El mejor fit') }}</h5>
                                <p class="gelion-thin" style="color: #fff;">
                                    {{ __('Puedes armar tus cajas escogiendo fit de dama, fit de caballero/unisex o combinarlos.') }}
                                </p>
                            </div>
                            <div class="col-6 left-o">
                                <img src="{{ asset('/img/index/hoja.svg') }}" alt="">
                                <h5 class="gelion-bold pt-3" style="color: #fff;">{{ __('Llegamos a todas partes') }}
                                </h5>
                                <p class="gelion-thin" style="color: #fff;">
                                    {{ __('Enviamos tus cajas a todas partes de México y Estados Unidos con costos preferenciales.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <div class="row pt-5">
                            <div class="col-lg-3 col-md-6 col-sm-6 left-o">
                                <img src="{{ asset('/img/index/hoja.svg') }}" alt="">
                                <h5 class="gelion-bold pt-3" style="color: #fff;">{{ __('Elige de 6 en 6 piezas') }}</h5>
                                <p class="gelion-thin" style="color: #fff;">
                                    {{ __('Configura tus cajas eligiendo de 6 en 6 piezas por talla y color.') }}
                                </p> <br>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 left-o">
                                <img src="{{ asset('/img/index/hoja.svg') }}" alt="">
                                <h5 class="gelion-bold pt-3" style="color: #fff;">{{ __('Todas las tallas') }}</h5>
                                <p class="gelion-thin" style="color: #fff;">
                                    {{ __('Elige todas las tallas que quieras (S-M-L-XL) siguiendo un orden de 6 en 6 piezas.') }}
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 left-o">
                                <img src="{{ asset('/img/index/hoja.svg') }}" alt="">
                                <h5 class="gelion-bold pt-3" style="color: #fff;">{{ __('El mejor fit') }}</h5>
                                <p class="gelion-thin" style="color: #fff;">
                                    {{ __('Puedes armar tus cajas escogiendo fit de dama, fit de caballero/unisex o combinarlos.') }}
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 left-o">
                                <img src="{{ asset('/img/index/hoja.svg') }}" alt="">
                                <h5 class="gelion-bold pt-3" style="color: #fff;">{{ __('Llegamos a todas partes') }}
                                </h5>
                                <p class="gelion-thin" style="color: #fff;">
                                    {{ __('Enviamos tus cajas a todas partes de México y Estados Unidos con costos preferenciales.') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Planes-->
                    <div class="d-none d-sm-none d-md-block d-lg-block" id="planes">
                        <div class="row pt-5 espacio-4">
                            @foreach ($plans as $plan)
                                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                    <!--uno-->
                                    <div class="card espacio-1">
                                        <div class="icon pt-2 pb-3">
                                            <img src="{{ asset('/img/index/box.svg') }}" width="70" alt="icono box">
                                        </div>
                                        <h3 class="gelion-bold espacio-2">
                                            @if (session()->get('divisa') == 'MXN')
                                                ${{ $plan->MXN }} MXN / ${{ $plan->MXN_L }} MXN
                                                <br>
                                                <small>{{ __('Manga corta / Manga larga') }}</small>
                                            @else
                                                ${{ $plan->USD }} USD / ${{ $plan->USD_L }}
                                                <br>
                                                <small>{{ __('Manga corta / Manga larga') }}</small>
                                            @endif <br>
                                            <span class="gelion-thin size-1">{{ __('Por pieza. IVA incluído.') }}</span>
                                        </h3>
                                        <h2 class="gelion-bold">{{ $plan->name }}</h2>
                                        <p class="gelion-thin" style="text-align:justify;">
                                            @switch($plan->id)
                                                @case(1)
                                                    {{ __('Ideal para emprendedores y negocios en crecimiento. Todo listo para que inicies con el mejor proyecto de tu vida.') }}
                                                @break
                                                @case(2)
                                                    {{ __('No te quedes sin stock. Incrementa tus posibilidades y capta más clientes con una nueva línea sustentable.') }}
                                                @break
                                                @case(3)
                                                    {{ __('Perfecto para todo profesional de la industria de la moda. Personaliza o distribuye las mejores camisetas para cuidar el planeta.') }}
                                                @break
                                            @endswitch
                                        </p>
                                        <li class="gelion-bold pt-2">
                                            <div class="row">
                                                <div class="col-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="col-10">
                                                    @switch($plan->id)
                                                        @case(1)
                                                            {{ __('1 caja de 72 camisetas') }}
                                                        @break
                                                        @case(2)
                                                            {!! __('2 cajas (144 camisetas)<br>o 3 cajas (216 camisetas).') !!}
                                                        @break
                                                        @case(3)
                                                            {!! __('4 cajas (288 camisetas) <br> o las que necesites') !!}
                                                        @break
                                                    @endswitch
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gelion-bold pt-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="col-10">
                                                    @switch($plan->id)
                                                        @case(1)
                                                            {{ __('Elige 2 colores') }}
                                                        @break
                                                        @case(2)
                                                            {{ __('Elige 4 colores') }}
                                                        @break
                                                        @case(3)
                                                            {{ __('Elige 6 colores') }}
                                                        @break
                                                    @endswitch
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gelion-bold pt-3" style="padding-bottom: 1.2em;">
                                            <div class="row">
                                                <div class="col-2 m-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="col-10">
                                                    {{ __('50% algodón reciclado pre-consumo + 50% poliéster reciclado (RPET)') }}
                                                    <br>
                                                </div>
                                            </div>
                                        </li>
                                        <div class="boton text-center mt-4">
                                            <a href="{{ route('plan', $plan) }}"
                                                class="btn btn-secondary gelion-bold btn-block pt-2 pb-2"
                                                style="font-size: 1.3rem;">{{ __('¡lo quiero!') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <div class="carousel">
                            <div class="carousel__contenedor">
                                <div class="carousel__lista1">
                                    @foreach ($plans as $plan)
                                        <div class="carousel__elemento m-1">
                                            <div class=" p-4">
                                                <!--Contenido de ordenes movil-->
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                        <!--uno-->
                                                        <div class="card espacio-1">
                                                            <div class="icon pt-2 pb-3">
                                                                <img src="{{ asset('/img/index/box.svg') }}" width="70"
                                                                    alt="icono box">
                                                            </div>
                                                            <h3 class="gelion-bold espacio-2">
                                                                @if (session()->get('divisa') == 'MXN')
                                                                    ${{ $plan->MXN }} MXN / ${{ $plan->MXN_L }} MXN
                                                                    <br>
                                                                    <small>{{ __('Manga corta / Manga larga') }}</small>
                                                                @else
                                                                    ${{ $plan->USD }} USD / ${{ $plan->USD_L }}
                                                                    <br>
                                                                    <small>{{ __('Manga corta / Manga larga') }}</small>
                                                                @endif <br>
                                                                <span
                                                                    class="gelion-thin size-1">{{ __('Por pieza. IVA incluído.') }}</span>
                                                            </h3>
                                                            <h2 class="gelion-bold">{{ $plan->name }}</h2>
                                                            <p class="gelion-thin" style="text-align:justify;">
                                                                @switch($plan->id)
                                                                    @case(1)
                                                                        {{ __('Ideal para emprendedores y negocios en crecimiento. Todo listo para que inicies con el mejor proyecto de tu vida.') }}
                                                                    @break
                                                                    @case(2)
                                                                        {{ __('No te quedes sin stock. Incrementa tus posibilidades y capta más clientes con una nueva línea sustentable.') }}
                                                                    @break
                                                                    @case(3)
                                                                        {{ __('Perfecto para todo profesional de la industria de la moda. Personaliza o distribuye las mejores camisetas para cuidar el planeta.') }}
                                                                    @break
                                                                @endswitch
                                                            </p>
                                                            <li class="gelion-bold pt-2">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-5 w-5" viewBox="0 0 20 20"
                                                                            fill="currentColor">
                                                                            <path fill-rule="evenodd"
                                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="col-10">
                                                                        @switch($plan->id)
                                                                            @case(1)
                                                                                {{ __('1 caja de 72 camisetas') }}
                                                                            @break
                                                                            @case(2)
                                                                                {!! __('2 cajas (144 camisetas)<br>o 3 cajas (216 camisetas).') !!}
                                                                            @break
                                                                            @case(3)
                                                                                {!! __('4 cajas (288 camisetas) <br> o las que necesites') !!}
                                                                            @break
                                                                        @endswitch
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gelion-bold pt-3">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-5 w-5" viewBox="0 0 20 20"
                                                                            fill="currentColor">
                                                                            <path fill-rule="evenodd"
                                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="col-10">
                                                                        @switch($plan->id)
                                                                            @case(1)
                                                                                {{ __('Elige 2 colores') }}
                                                                            @break
                                                                            @case(2)
                                                                                {{ __('Elige 4 colores') }}
                                                                            @break
                                                                            @case(3)
                                                                                {{ __('Elige 6 colores') }}
                                                                            @break
                                                                        @endswitch
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gelion-bold pt-3" style="padding-bottom: 1.2em;">
                                                                <div class="row">
                                                                    <div class="col-2 m-auto">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-5 w-5" viewBox="0 0 20 20"
                                                                            fill="currentColor">
                                                                            <path fill-rule="evenodd"
                                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="col-10">
                                                                        {{ __('50% algodón reciclado pre-consumo + 50% poliéster reciclado (RPET)') }}
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </li><br>
                                                            <div class="boton text-center mt-4">
                                                                <a href="{{ route('plan', $plan) }}"
                                                                    class="btn btn-secondary gelion-bold btn-block pt-2 pb-2"
                                                                    style="font-size: 1.3rem;">¡lo quiero!</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div role="tabList" class="carousel__indicadores"></div>
                        </div>
                    </div>
                    <h4 class="gelion-bold text-center pt-5" style="color: #fff;">{{ __('Suscríbete a nuestro newsletter') }}</h4>
                    <div class="form-inline espacio-3">
                        <div class="form-group mr-lg-3 mb-2">
                            <input type="password" class="form-control" id="inputPassword2" placeholder="E-mail">
                        </div>
                        <button type="submit" class="btn btn-light gelion-bold mb-2">{{ __('ENVIAR') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="index-blog-1">
        <div class="d-none d-sm-none d-md-none d-lg-block">
            <div class="contenido-blog-index">
                <div class="container desfase">
                    <div class="row desfase-1">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card espacio-5">
                                    <img src="{{ Storage::url($post->image->url) }}" class="img-fluid"
                                        alt="Myrewear">
                                    <h5 class="gelion-bold pt-3">
                                        @if (session('locale') == 'es')
                                            {{ $post->title }}
                                        @else
                                            {{ $post->title_en }}
                                        @endif
                                    </h5>
                                    @if (session('locale') == 'es')
                                        <p class="gelion-thin">
                                            {!! $post->extract !!}
                                        </p>
                                    @else
                                        <p class="gelion-thin">
                                            {!! $post->extract_en !!}
                                        </p>
                                    @endif
                                    <a href="{{ route('post.show', $post) }}" class="btn btn-secondary gelion-bold">Ver
                                        más</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="desfas">
                <div class="d-block d-sm-block d-md-block d-lg-none">
                    <div class="carousel">
                        <div class="carousel__contenedor">
                            <div class="carousel__lista3">
                                @foreach ($posts as $post)
                                    <div class="carousel__elemento m-1">
                                        <div class=" p-4">
                                            <!--Contenido de ordenes movil-->
                                            <div class="row">
                                                <div class="col">
                                                    <!--uno-->
                                                    <div class="card espacio-5">
                                                        <img src="{{ Storage::url($post->image->url) }}"
                                                            class="img-fluid" alt="Myrewear">
                                                        <h5 class="gelion-bold pt-3">
                                                            @if (session('locale') == 'es')
                                                                {{ $post->title }}
                                                            @else
                                                                {{ $post->title_en }}
                                                            @endif
                                                        </h5>
                                                        @if (session('locale') == 'es')
                                                            <p class="gelion-thin">
                                                                {!! $post->extract !!}
                                                            </p>
                                                        @else
                                                            <p class="gelion-thin">
                                                                {!! $post->extract_en !!}
                                                            </p>
                                                        @endif
                                                        <a href="{{ route('post.show', $post) }}"
                                                            class="btn btn-secondary gelion-bold">{{ __('Ver más') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div role="tabList" class="carousel__indicadores1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-md-6 col-sm-12 m-auto botella left">
                    <h4 class="gelion-bold">{{ __('Trabajando juntos hacemos grandes cambios') }}</h4>
                    <p class="gelion-light">
                        {{ __('Si perteneces a una asociación o grupo que apoya al medio ambiente, podemos apoyarte y generar acciones en conjunto.') }}
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-secondary">{{ __('Contáctanos') }}</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m-auto right">
                    <video src="{{ asset('/img/index/video.mp4') }}" controls class="w-100"></video>
                </div>
            </div>
        </div>
    </section>
@endsection
