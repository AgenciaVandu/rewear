@extends('layouts.rewear-azul')
@section('content')
<header id="nosotros">
    <div class="bg-amarillo text-center pb-5">
        <h1 class="gelion-bold">¡Hola! Estás a punto de ser parte  <br class="d-none d-sm-none d-md-block d-lg-block">
            del movimiento zero waste</h1>
        <img src="{{asset('/img/nosotros/cabecera.png')}}" class="img-fluid pt-4 pb-5" alt="">
        <h2 class="gelion-bold">Los colores perfectos para tu marca sustentable</h2>
        <p class="gelion-light size">Cada caja de camisetas rewear elimina la contaminación equivalente <br class="d-none d-sm-none d-md-block d-lg-block"> a 364 botellas de plástico de ríos, mares y océanos</p>
    </div>
</header>
<section id="proceso">
    <div class="text-center pt-5 pb-5" style="background: #003057;">
        <div class="container">
            <h1 class="gelion-bold pb-3" style="color: #fff;">
                Nosotros lo hicimos posible. <br class="d-none d-sm-none d-md-block d-lg-block">Algodón reciclado + poliéster reciclado
            </h1>
                <img src="{{asset('/img/nosotros/proceso.png')}}" class="pt-5 pb-5 img-fluid d-none d-sm-none d-md-block d-lg-block" alt="">
                <img src="{{asset('img/nosotros/Procesos-vertical-(Español).png')}}" class="d-block d-sm-block d-md-none d-lg-none img-fluid" alt="">
        </div>
    </div>
</section>
<section id="certificados">
    <div class="bg-amarillo3">
        <div class="container text-center pt-5">
            <h2 class="gelion-bold">Muchas camisetas, mucho amor por el planeta. <br>
                <span class="gelion-regular size-2">Nuestros ahorros cada año.</span>
            </h2>
            <div class="d-none d-sm-none d-md-block d-lg-block">
                <div class="row pt-4">
                    <div class="col">
                        <img src="{{asset('/img/nosotros/Rectangle 214.png')}}" class="img-fluid" alt="">
                        <h3 class=" gelion-bold line-h pt-3">5.99 Millones <br>
                            <span class="gelion-regular size-3">de litros de agua ahorrados al año</span>
                        </h3>
                    </div>
                    <div class="col">
                        <img src="{{asset('/img/nosotros/Rectangle 215.png')}}" class="img-fluid" alt="">
                        <h3 class=" gelion-bold line-h pt-3">3.75 Millones <br>
                            <span class="gelion-regular size-3">de Kg de residuos textiles transformados en algodón</span>
                        </h3>
                    </div>
                    <div class="col">
                        <img src="{{asset('/img/nosotros/Rectangle 216.png')}}" class="img-fluid" alt="">
                        <h3 class="gelion-bold line-h pt-3">4.2 Millones <br>
                            <span class="gelion-regular size-3">de botellas de plástico
                                PET reciclado</span>
                        </h3>
                    </div>
                    <div class="col">
                        <img src="{{asset('/img/nosotros/Rectangle 217.png')}}" class="img-fluid" alt="">
                        <h3 class="gelion-bold line-h pt-3">157 Millones <br>
                            <span class="gelion-regular size-3">de kWh energía ahorrada
                                en nuestros procesos</span>
                        </h3>
                    </div>
                    <div class="col">
                        <img src="{{asset('/img/nosotros/Rectangle 218.png')}}" class="img-fluid" alt="">
                        <h3 class="gelion-bold line-h pt-3">0 Químicos <br>
                            <span class="gelion-regular size-3">ni tintes vertidos al subsuelo
                                en nuestro proceso</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none"> <!--movil-->
                <div class="carousel">
                    <div class="carousel__contenedor">
                        <div class="carousel__lista">
                            <div class="carousel__elemento m-1">
                                <div class="p-4"> <!--Contenido de ordenes movil-->
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{asset('/img/nosotros/Rectangle 214.png')}}" class="img-fluid" alt="">
                                            <h3 class="gelion-bold line-h pt-3">5.99 Millones <br>
                                            </h3>
                                            <p class="gelion-regular">de litros de agua ahorrados al año</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrusel__elemento m-1">
                                <div class="p-4"> <!--Contenido de ordenes movil-->
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{asset('/img/nosotros/Rectangle 215.png')}}" class="img-fluid" alt="">
                                            <h3 class="gelion-bold line-h pt-3">3.75 Millones <br>
                                            </h3>
                                            <p class="gelion-regular">de Kg de residuos textiles transformados en algodón</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrusel__elemento m-1">
                                <div class="p-4"> <!--Contenido de ordenes movil-->
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{asset('/img/nosotros/Rectangle 216.png')}}" class="img-fluid" alt="">
                                            <h3 class="gelion-bold line-h pt-3">4.2 Millones <br>
                                            </h3>
                                            <p class="gelion-regular">de botellas de plástico
                                                PET reciclado</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrusel__elemento m-1">
                                <div class="p-4"> <!--Contenido de ordenes movil-->
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{asset('/img/nosotros/Rectangle 217.png')}}" class="img-fluid" alt="">
                                            <h3 class="gelion-bold line-h pt-3">157 Millones <br>                                               
                                            </h3>
                                            <p class="gelion-regular">de kWh energía ahorrada
                                                en nuestros procesos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrusel__elemento m-1">
                                <div class="p-4"> <!--Contenido de ordenes movil-->
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{asset('/img/nosotros/Rectangle 218.png')}}" class="img-fluid" alt="">
                                            <h3 class="gelion-bold line-h pt-3">0 Químicos <br>                                           
                                            </h3>
                                            <p class="gelion-regular">ni tintes vertidos al subsuelo
                                                en nuestro proceso</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabList" class="carousel__indicadores1"></div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-7 col-md-12 col-sm-12 left-o">
                    <h2 class="gelion-bold">Nuestra calidad la respaldamos <br class="d-none d-sm-none d-md-block d-lg-block"> con las mejores certificaciones</h2>
                    <p class="gelio-regular">El hilo con el que creamos nuestras prendas está certiicado por:</p>
                </div>
                <div class="col-lg-5 col-md-12 text-center col-sm-12">
                        <img src="{{asset('/img/nosotros/certificados.png')}}" class="img-fluid d-none d-sm-none d-md-none d-lg-block" alt="AWARE | Global recycled standard">
                        <div class="d-block d-sm-block d-md-block d-lg-none">
                            <div class="text-center">
                                <img src="{{asset('/img/nosotros/certificados-movil.png')}}" class="img-fluid  text-center" alt="AWARE | Global recycled standard">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team" style="background: #003057;">
    <div class="">
        <div class="container">
            <div class="text-center pt-5">
                <h1 class="gelion-bold pb-5" style="color: #fff;">Conoce al talento detrás de Rewear</h1>
                <div class="d-block d-sm-block d-md-block d-lg-none">
                    <div class="row">
                        <div class="col-6 pt-3">
                            <img src="{{asset('/img/nosotros/team/alice-1.png')}}" alt="" class="img-fluid">
                        <h3 class="gelion-bold pt-3" style="color: #fff;">Alice Dissegna <br>
                        <span class="gelion-regular size-4">
                            Director General
                        </span>
                        </div>
                        <div class="col-6 pt-3">
                            <img src="{{asset('/img/nosotros/team/carola-1.png')}}" alt="" class="img-fluid">
                            <h3 class="gelion-bold pt-3" style="color: #fff;">Carola Caneparo <br>
                            <span class="gelion-regular size-4">
                                Director General
                            </span>
                        </div>
                        <div class="col-6 pt-3">
                            <img src="{{asset('/img/nosotros/team/silvia-1.png')}}" alt="" class="img-fluid">
                            <h3 class="gelion-bold pt-3" style="color: #fff;">Silvia López <br>
                            <span class="gelion-regular size-4">
                                Director General
                            </span>
                        </div>
                        <div class="col-6 pt-3">
                            <img src="{{asset('/img/nosotros/team/nalleli-1.png')}}" alt="" class="img-fluid">
                            <h3 class="gelion-bold pt-3" style="color: #fff;">Nalleli Antonio <br>
                            <span class="gelion-regular size-4">
                                Director General
                            </span>
                        </div>
                        <div class="col-6 pt-3">
                            <img src="{{asset('/img/nosotros/team/alejandra-1.png')}}" alt="" class="img-fluid">
                            <h3 class="gelion-bold pt-3" style="color: #fff;">Alejandra Aguilar <br>
                            <span class="gelion-regular size-4">
                                Director General
                            </span>
                        </div>
                        <div class="col-6 pt-3">
                            <img src="{{asset('/img/nosotros/team/william-1.png')}}" alt="" class="img-fluid">
                            <h3 class="gelion-bold pt-3" style="color: #fff;">William Marrufo <br>
                            <span class="gelion-regular size-4">
                                Director General
                            </span>
                        </div>
                        <div class="col-6 pt-3">
                            <img src="{{asset('/img/nosotros/team/luis-1.png')}}" alt="" class="img-fluid">
                            <h3 class="gelion-bold pt-3" style="color: #fff;">Luis Vivas Núñez <br>
                            <span class="gelion-regular size-4">
                                Director General
                            </span>
                        </div>
                        
                    </div>
                </div>
            <div class="d-none d-sm-none d-md-none d-lg-block">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('/img/nosotros/team/alice-1.png')}}" alt="" class="img-fluid">
                        <h3 class="gelion-bold pt-3" style="color: #fff;">Alice Dissegna <br>
                        <span class="gelion-regular size-4">
                            Director General
                        </span>
                    </h3>
                    </div>
                    <div class="col">
                        <img src="{{asset('/img/nosotros/team/carola-1.png')}}" alt="" class="img-fluid">
                        <h3 class="gelion-bold pt-3" style="color: #fff;">Carola Caneparo <br>
                        <span class="gelion-regular size-4">
                            Director General
                        </span>
                    </h3>
                    </div>
                    <div class="col">
                        <img src="{{asset('/img/nosotros/team/silvia-1.png')}}" alt="" class="img-fluid">
                        <h3 class="gelion-bold pt-3" style="color: #fff;">Silvia López <br>
                        <span class="gelion-regular size-4">
                            Director General
                        </span>
                    </h3>
                    </div>
                    <div class="col">
                        <img src="{{asset('/img/nosotros/team/nalleli-1.png')}}" alt="" class="img-fluid">
                        <h3 class="gelion-bold pt-3" style="color: #fff;">Nalleli Antonio <br>
                        <span class="gelion-regular size-4">
                            Director General
                        </span>
                    </h3>
                    </div>
                </div>
                <div class="row m-auto over pt-4">
                    <div class="col">
                        <img src="{{asset('/img/nosotros/team/alejandra-1.png')}}" alt="" class="img-fluid">
                        <h3 class="gelion-bold pt-3" style="color: #fff;">Alejandra Aguilar <br>
                        <span class="gelion-regular size-4">
                            Director General
                        </span>
                    </h3>
                    </div>
                    <div class="col">
                        <img src="{{asset('/img/nosotros/team/william-1.png')}}" alt="" class="img-fluid">
                        <h3 class="gelion-bold pt-3" style="color: #fff;">William Marrufo <br>
                        <span class="gelion-regular size-4">
                            Director General
                        </span>
                    </h3>
                    </div>
                    <div class="col">
                        <img src="{{asset('/img/nosotros/team/luis-1.png')}}" alt="" class="img-fluid">
                        <h3 class="gelion-bold pt-3" style="color: #fff;">Luis Vivas Núñez <br>
                        <span class="gelion-regular size-4">
                            Director General
                        </span>
                    </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg-3 pt-5"><!--bg-azul-->
    <h1 class="gelion-bold text-center" style="color: #fff;">Cambia al mundo con cada camiseta. Arma tus cajas.</h1>
    <div class="container">
        <div class="d-none d-block d-sm-block d-md-none d-lg-none">
            <div class="row pt-5">
                <div class="col-6 left-o">
                    <img src="{{asset('/img/index/hoja.svg')}}" alt="">
                    <h5 class="gelion-bold pt-3" style="color: #fff;">Elige de 6 en 6 piezas</h5>
                    <p class="gelion-thin" style="color: #fff;">Configura tus cajas eligiendo de 6 en 6 piezas por talla y color.</p>
                </div>
                <div class="col-6 left-o">
                    <img src="{{asset('/img/index/hoja.svg')}}" alt="">
                    <h5 class="gelion-bold pt-3" style="color: #fff;">Todas las tallas</h5>
                    <p class="gelion-thin" style="color: #fff;">Elige todas las tallas que quieras (S-M-L-XL) siguiendo un orden de 6 en 6 piezas.</p>
                </div>
                <div class="col-6 left-o">
                    <img src="{{asset('/img/index/hoja.svg')}}" alt="">
                    <h5 class="gelion-bold pt-3" style="color: #fff;">El mejor fit</h5>
                    <p class="gelion-thin" style="color: #fff;">Puedes armar tus cajas escogiendo fit de dama, fit de caballero/unisex o combinarlos.</p>
                </div>
                <div class="col-6 left-o">
                    <img src="{{asset('/img/index/hoja.svg')}}" alt="">
                    <h5 class="gelion-bold pt-3" style="color: #fff;">Llegamos a todas partes</h5>
                    <p class="gelion-thin" style="color: #fff;">Enviamos tus cajas a todas
                        partes de México y Estados Unidos con costos preferenciales.</p>
                </div>
            </div>
        </div>
        <div class="d-none d-sm-none d-md-block d-lg-block">
            <div class="row pt-5">
                <div class="col-lg-3 col-md-6 col-sm-6 left-o">
                    <img src="{{asset('/img/index/hoja.svg')}}" alt="">
                    <h5 class="gelion-bold pt-3" style="color: #fff;">Elige de 6 en 6 piezas</h5>
                    <p class="gelion-thin" style="color: #fff;">Configura tus cajas eligiendo de 6 en 6 piezas por talla y color.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 left-o">
                    <img src="{{asset('/img/index/hoja.svg')}}" alt="">
                    <h5 class="gelion-bold pt-3" style="color: #fff;">Todas las tallas</h5>
                    <p class="gelion-thin" style="color: #fff;">Elige todas las tallas que quieras (S-M-L-XL) siguiendo un orden de 6 en 6 piezas.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 left-o">
                    <img src="{{asset('/img/index/hoja.svg')}}" alt="">
                    <h5 class="gelion-bold pt-3" style="color: #fff;">El mejor fit</h5>
                    <p class="gelion-thin" style="color: #fff;">Puedes armar tus cajas escogiendo fit de dama, fit de caballero/unisex o combinarlos.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 left-o">
                    <img src="{{asset('/img/index/hoja.svg')}}" alt="">
                    <h5 class="gelion-bold pt-3" style="color: #fff;">Llegamos a todas partes</h5>
                    <p class="gelion-thin" style="color: #fff;">Enviamos tus cajas a todas
                        partes de México y Estados Unidos con costos preferenciales.</p>
                </div>
            </div>
        </div>
        
        <!--Planes-->
        <div class="d-none d-sm-none d-md-block d-lg-block">
            <div class="row pt-5 espacio-4">
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3"> <!--uno-->
                    <div class="card espacio-1">
                        <div class="icon pt-2 pb-3">
                            <img src="{{asset('/img/index/box.svg')}}" width="70" alt="icono box">
                        </div>
                        <h3 class="gelion-bold espacio-2">$100.00 MXN <br>
                            <span class="gelion-thin size-1">Por pieza. IVA incluído.</span>
                        </h3>
                        <h2 class="gelion-bold">Plan Start</h2>
                        <p class="gelion-thin" style="text-align:justify;">Ideal para emprendedores y negocios en crecimiento. Todo listo para que inicies con el mejor proyecto de tu vida.</p>
                        <li class="gelion-bold pt-2">
                            <div class="row">
                                <div class="col-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                <div class="col-10">
                                    1 caja de 72 camisetas
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3">
                            <div class="row">
                                <div class="col-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                <div class="col-10">
                                    Elige 2 colores
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3" style="padding-bottom: 1.2em;">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                <div class="col-10">
                                    50% algodón reciclado pre-consumo + 50% poliéster reciclado (RPET) <br >
                                </div>
                            </div>
                        </li>
                        <div class="boton text-center mt-4">
                            <a href="" class="btn btn-secondary gelion-bold btn-block pt-2 pb-2" style="font-size: 1.3rem;">¡lo quiero!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><!--dos-->
                    <div class="card espacio-1">
                        <div class="icon pt-2 pb-3">
                            <img src="{{asset('/img/index/box.svg')}}" width="70" alt="icono box">
                        </div>
                        <h3 class="gelion-bold espacio-2">$90.00 MXN <br>
                            <span class="gelion-thin size-1">Por pieza. IVA incluído.</span>
                        </h3>
                        <h2 class="gelion-bold">Plan Plus</h2>
                        <p class="gelion-thin" style="text-align:justify;">No te quedes sin stock. Incrementa tus posibilidades y capta más clientes con una nueva línea sustentable.</p>
                        <li class="gelion-bold pt-2">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                <div class="col-10">
                                    2 cajas (144 camisetas)<br>o  3 cajas (216 camisetas).
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3">
                            <div class="row">
                                <div class="col-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                <div class="col-10">
                                    Elige 6 colores
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                <div class="col-10">
                                    50% algodón reciclado pre-consumo + 50% poliéster reciclado (RPET)
                                </div>
                            </div>
                        </li>
                        <div class="boton text-center mt-4">
                            <a href="" class="btn btn-secondary gelion-bold btn-block pt-2 pb-2" style="font-size: 1.3rem;">¡lo quiero!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3"><!--tres-->
                    <div class="card espacio-1">
                        <div class="icon pt-2 pb-3">
                            <img src="{{asset('/img/index/box.svg')}}" width="70" alt="icono box">
                        </div>
                        <h3 class="gelion-bold espacio-2">$80.00 MXN <br>
                            <span class="gelion-thin size-1">Por pieza. IVA incluído.</span>
                        </h3>
                        <h2 class="gelion-bold">Plan Start</h2>
                        <p class="gelion-thin" style="text-align:justify;">Perfecto para todo profesional de la industria de la moda. Personaliza o distribuye las mejores camisetas para cuidar el planeta.</p>
                        <li class="gelion-bold pt-2">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                <div class="col-10">
                                    4 cajas (288 camisetas) <br> o las que necesites
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3">
                            <div class="row">
                                <div class="col-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                <div class="col-10">
                                    Elige 2 colores
                                </div>
                            </div>
                        </li>
                        <li class="gelion-bold pt-3">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                <div class="col-10">
                                    50% algodón reciclado pre-consumo + 50% poliéster reciclado (RPET)
                                </div>
                            </div>
                        </li>
                        <div class="boton text-center mt-4">
                            <a href="" class="btn btn-secondary gelion-bold btn-block pt-2 pb-2" style="font-size: 1.3rem;">¡lo quiero!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-sm-block d-md-none d-lg-none">
            <div class="carousel">
                <div class="carousel__contenedor">
                    <div class="carousel__lista1">
                        <div class="carousel__elemento m-1">
                            <div class=" p-4"> <!--Contenido de ordenes movil-->
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12"> <!--uno-->
                                        <div class="card espacio-1">
                                            <div class="icon pt-2 pb-3">
                                                <img src="{{asset('/img/index/box.svg')}}" width="70" alt="icono box">
                                            </div>
                                            <h3 class="gelion-bold espacio-2">$100.00 MXN <br>
                                                <span class="gelion-thin size-1">Por pieza. IVA incluído.</span>
                                            </h3>
                                            <h2 class="gelion-bold">Plan Start</h2>
                                            <p class="gelion-thin" style="text-align:justify;">Ideal para emprendedores y negocios en crecimiento. Todo listo para que inicies con el mejor proyecto de tu vida.</p>
                                            <li class="gelion-bold pt-2">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                          </svg>
                                                    </div>
                                                    <div class="col-10">
                                                        1 caja de 72 camisetas
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="gelion-bold pt-3">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                          </svg>
                                                    </div>
                                                    <div class="col-10">
                                                        Elige 2 colores
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="gelion-bold pt-3" style="padding-bottom: 1.2em;">
                                                <div class="row">
                                                    <div class="col-2 m-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                          </svg>
                                                    </div>
                                                    <div class="col-10">
                                                        50% algodón reciclado pre-consumo + 50% poliéster reciclado (RPET) <br >
                                                    </div>
                                                </div>
                                            </li><br>
                                            <div class="boton text-center mt-4">
                                                <a href="" class="btn btn-secondary gelion-bold btn-block pt-2 pb-2" style="font-size: 1.3rem;">¡lo quiero!</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carrusel__elemento m-1">
                            <div class="p-4"> <!--Contenido de ordenes movil-->
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12"><!--dos-->
                                        <div class="card espacio-1">
                                            <div class="icon pt-2 pb-3">
                                                <img src="{{asset('/img/index/box.svg')}}" width="70" alt="icono box">
                                            </div>
                                            <h3 class="gelion-bold espacio-2">$90.00 MXN <br>
                                                <span class="gelion-thin size-1">Por pieza. IVA incluído.</span>
                                            </h3>
                                            <h2 class="gelion-bold">Plan Plus</h2>
                                            <p class="gelion-thin" style="text-align:justify;">No te quedes sin stock. Incrementa tus posibilidades y capta más clientes con una nueva línea sustentable.</p>
                                            <li class="gelion-bold pt-2">
                                                <div class="row">
                                                    <div class="col-2 m-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                          </svg>
                                                    </div>
                                                    <div class="col-10">
                                                        2 cajas (144 camisetas)<br>o  3 cajas (216 camisetas).
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="gelion-bold pt-3">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                          </svg>
                                                    </div>
                                                    <div class="col-10">
                                                        Elige 6 colores
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="gelion-bold pt-3">
                                                <div class="row">
                                                    <div class="col-2 m-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                          </svg>
                                                    </div>
                                                    <div class="col-10">
                                                        50% algodón reciclado pre-consumo + 50% poliéster reciclado (RPET)
                                                    </div>
                                                </div>
                                            </li> <br>
                                            <div class="boton text-center mt-4">
                                                <a href="" class="btn btn-secondary gelion-bold btn-block pt-2 pb-2" style="font-size: 1.3rem;">¡lo quiero!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carrusel__elemento m-1">
                            <div class="p-4"> <!--Contenido de ordenes movil-->
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12"><!--tres-->
                                        <div class="card espacio-1">
                                            <div class="icon pt-2 pb-3">
                                                <img src="{{asset('/img/index/box.svg')}}" width="70" alt="icono box">
                                            </div>
                                            <h3 class="gelion-bold espacio-2">$80.00 MXN <br>
                                                <span class="gelion-thin size-1">Por pieza. IVA incluído.</span>
                                            </h3>
                                            <h2 class="gelion-bold">Plan Start</h2>
                                            <p class="gelion-thin" style="text-align:justify;">Perfecto para todo profesional de la industria de la moda. Personaliza o distribuye las mejores camisetas para cuidar el planeta.</p>
                                            <li class="gelion-bold pt-2">
                                                <div class="row">
                                                    <div class="col-2 m-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                          </svg>
                                                    </div>
                                                    <div class="col-10">
                                                        4 cajas (288 camisetas) <br> o las que necesites
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="gelion-bold pt-3">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                          </svg>
                                                    </div>
                                                    <div class="col-10">
                                                        Elige 2 colores
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="gelion-bold pt-3">
                                                <div class="row">
                                                    <div class="col-2 m-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                          </svg>
                                                    </div>
                                                    <div class="col-10">
                                                        50% algodón reciclado pre-consumo + 50% poliéster reciclado (RPET)
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="boton text-center mt-4">
                                                <a href="" class="btn btn-secondary gelion-bold btn-block pt-2 pb-2" style="font-size: 1.3rem;">¡lo quiero!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabList" class="carousel__indicadores"></div>
            </div>
        </div>
        <h4 class="gelion-bold text-center pt-5" style="color: #fff;">Suscríbete a nuestro newsletter</h4>
        <div class="form-inline espacio-3">
            <div class="form-group mr-lg-3 mb-2">
                <input type="password" class="form-control" id="inputPassword2" placeholder="E-mail">
              </div>
              <button type="submit" class="btn btn-light gelion-bold mb-2">ENVIAR</button>
        </div>
    </div>
</div>
@endsection