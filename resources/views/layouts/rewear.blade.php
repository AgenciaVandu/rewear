<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rewear</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    @livewireStyles
    <style>
        .bg-dark {
            background-color: transparent !important;
            transition: 0.5s ease;
        }

        @media (max-width: 999px) {
            .bg-dark {
                background-color: #003057 !important;

            }
        }

        .bg-dark.scrolled {
            background: #003057 !important;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/img/rewear-bco.svg') }}" width="150" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home.index') }}">{{ __('Inicio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">{{ __('Nosotros') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('catalogue.index') }}">{{ __('Catálogo') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">{{ __('FAQ') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">{{ __('Contacto') }}</a>
                    </li>
                    <div class="dropdown">
                        @if (session()->get('divisa') == 'MXN')
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-expanded="false" style="color: #fff">
                                MXN
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item gelion-bold" href="{{ route('divisas', 'USD') }}"
                                    style="color: #fff">
                                    USD
                                </a>
                            </div>
                        @else
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-expanded="false" style="color: #fff">
                                USD
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item gelion-bold" href="{{ route('divisas', 'MXN') }}"
                                    style="color: #fff">
                                    MXN
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="d-none d-sm-none d-md-none d-lg-block">
                        <div class="bag">
                            @livewire('dropdown-cart')
                        </div>
                    </div>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="{{ route('profile.index') }}">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('set.lang','es') }}" class="nav-link">
                            ES
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            |
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('set.lang','en') }}" class="nav-link">
                            EN
                        </a>
                    </li>
                </ul>

            </div>
            <div class="d-block d-sm-block d-md-block d-lg-none">
                <div class="bag">
                    @livewire('dropdown-cart')
                </div>
            </div>
        </div>
    </nav>
    @yield('content')


    <footer>
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-lg-4 col-md-12 col-sm-12 m-auto">
                    <img src="{{ asset('/img/rewear-bco.svg') }}" alt="" width="200">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4 class="gelion-bold" style="color: #fff;">Mapa del sitio</h4>
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <a href="" class="gelion-thin" style="color: #fff;">Inicio</a>
                            </li>
                            <li>
                                <a href="" class="gelion-thin" style="color: #fff;">Nosotros</a>
                            </li>
                            <li>
                                <a href="" class="gelion-thin" style="color: #fff;">Catálogo</a>
                            </li>
                            <li>
                                <a href="" class="gelion-thin" style="color: #fff;">Blog</a>
                            </li>
                        </div>
                        <div class="col-6">
                            <li>
                                <a href="" class="gelion-thin" style="color: #fff;">FAQ</a>
                            </li>
                            <li>
                                <a href="" class="gelion-thin" style="color: #fff;">Contacto</a>
                            </li>
                        </div>
                    </div>
                    <h4 class="gelion-bold pt-5" style="color: #fff;">Síguenos en redes sociales</h4>
                    <div class="row">
                        <div class="col-12">
                            <li>
                                <div class="row pt-2">
                                    <div class="col-2 pt-2">
                                        <a href="" style="color: #fff;">
                                            <i class="fab fa-facebook-square" style="color: #fff; font-size: 2em;"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 pt-2">
                                        <a href="" style="color: #fff;">
                                            <i class="fab fa-instagram" style="color: #fff; font-size: 2em;"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 pt-2">
                                        <a href="" style="color: #fff;">
                                            <i class="fab fa-linkedin" style="color: #fff; font-size: 2em;"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4 class="gelion-bold" style="color: #fff;">Mapa del sitio</h4>
                    <div class="row">
                        <div class="col-12">
                            <li>
                                <div class="row">
                                    <div class="col-1 m-auto">
                                        <img src="{{ asset('/img/index/ubi.svg') }}" width="20">
                                    </div>
                                    <div class="col-11 ">
                                        <p class="gelion-thin m-auto" style="color: #fff;">Dirección: Umán, yucatán</p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-2">
                                <div class="row">
                                    <div class="col-1 m-auto">
                                        <img src="{{ asset('/img/index/cel.svg') }}" width="20">
                                    </div>
                                    <div class="col-11 ">
                                        <p class="gelion-thin m-auto" style="color: #fff;">Teléfono: (999) 999 9999</p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-2">
                                <div class="row">
                                    <div class="col-1 m-auto">
                                        <img src="{{ asset('/img/index/cel.svg') }}" width="20">
                                    </div>
                                    <div class="col-11 ">
                                        <p class="gelion-thin m-auto" style="color: #fff;">Email: contacto@myrewear.com
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="border-color: #fff; opacity: 20%;">
        <div class="container">
            <div class="text-center pt-5 pb-4">
                <a href="" class="gelion-bold" style="color: #fff; text-decoration: none;">Política de
                    privacidad</a>
                <p href="" class="gelion-bold" style="color: #fff; text-decoration: none;">Playeras ecológicas
                    Rewear 2021 © todos los derechos reservados</p>
            </div>
        </div>
    </footer>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        })
    </script>
    <script src="{{ asset('/js/carrusel.js') }}"></script>
</body>

</html>
