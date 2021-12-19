@extends('layouts.rewear-azul')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('/css/user.css')}}">
@endpush
<section id="perfil" class="pb-5">
    <!--Movil-->
    <div class="d-block d-sm-block d-md-block d-lg-none">   <!--Contenido de ordenes movil-->  
        <div class="container">
            <div class="col pt-2 mb-3">
                <div class="carousel">
                    <div class="carousel__contenedor">
                        <div class="carousel__lista6">
                            <div class="carousel__elemento m-1">
                                <div class="card p-4"> <!--Contenido de ordenes movil-->
                                    <div class="row">
                                        <div class="col-lg-7 col-md-12 col-sm-12 m-auto pt-1">
                                            <h5 class="gelion-bold size-4">
                                                ID de órden: <span class="gelion-regular size-5">545253887</span>
                                                <span class="date pl-3"> <br class="d-block d-sm-block">
                                                    Fecha de orden: <span class="gelion-thin">16 de Diciembre del 2021</span>
                                                </span>
                                                
                                            </h5>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-12 control-but right-o right-r">
                                            <button href="" class="print-a">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                                </svg> <span class="size-2">Print</span>
                                            </button>
                                        </div>
                                        <table class="table table-borderless">
                                            <tbody>
                                              <tr>
                                                <th scope="row">
                                                    <h3 class="gelion-bold">
                                                        Plan: <span>Start 72 piezas</span>
                                                    </h3>
                                                    <li class="gelion-thin">
                                                        Teléfono: <span>+(52) 55 5284 0400</span>
                                                    </li>
                                                    <li class="gelion-thin">
                                                         Dirección: <span>Bosques de Alisos 47A - Piso 4, Bosques de las Lomas Ciudad de México</span>
                                                    </li>
                                                    <li class="gelion-thin">
                                                        C.P. 05120
                                                    </li>
                                                </th>
                                              </tr>
                                            </tbody>
                                          </table>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="carrusel__elemento m-1">
                                <div class="card p-4"> <!--Contenido de ordenes movil-->
                                    <div class="row">
                                        <div class="col-lg-7 col-md-12 col-sm-12 m-auto pt-1">
                                            <h5 class="gelion-bold size-4">
                                                ID de órden: <span class="gelion-regular size-5">545253887</span>
                                                <span class="date pl-3"><br class="d-block d-sm-block">
                                                    Fecha de orden: <span class="gelion-thin">16 de Diciembre del 2021</span>
                                                </span>
                                                
                                            </h5>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-12 right-o right-r">
                                            <a href="" class="print-a">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                                </svg> <span class="size-2">Print</span>
                                            </a>
                                        </div>
                                        <table class="table table-borderless">
                                            <tbody>
                                              <tr>
                                                <th scope="row">
                                                    <h3 class="gelion-bold">
                                                        Plan: <span>Start 72 piezas</span>
                                                    </h3>
                                                    <li class="gelion-thin">
                                                        Teléfono: <span>+(52) 55 5284 0400</span>
                                                    </li>
                                                    <li class="gelion-thin">
                                                         Dirección: <span>Bosques de Alisos 47A - Piso 4, Bosques de las Lomas Ciudad de México</span>
                                                    </li>
                                                    <li class="gelion-thin">
                                                        C.P. 05120
                                                    </li>
                                                </th>
                                              </tr>
                                            </tbody>
                                          </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabList" class="carousel__indicadores1"></div>
                </div>
            </div>
        </div>
    </div>
    <!--end Movil-->
    <div class="container">
        <div class="d-block d-sm-block d-md-block d-lg-block">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 user pt-2 right-o"> <!--Navegación-->
                    <!--<div class="text-center pb-2">
                        <h2 class="gelion-bold">Hola, <span>Luis</span>👋🏻</h2>
                    </div>-->
                    <div class="d-block d-sm-block d-md-block d-lg-block">
                        <div class="card p-4 text-center">
                            <div class="d-none d-sm-none d-md-none d-lg-block">
                                 <div id="ordenes">
                                     <button class="gelion-bold user-font btn-block">Mis órdenes</button> 
                                 </div>
                            </div>
                            <div class="d-block d-sm-block d-md-block d-lg-block">
                                 <div id="cuenta">
                                     <button class="gelion-bold user-font btn-block">Mi cuenta</button> 
                                 </div>
                            </div>
                            <!--<div class="d-none d-sm-none d-md-none d-lg-block">
                                 <div id="ayuda">
                                     <button class="gelion-bold user-font btn-block">Ayuda</button>
                                 </div>
                            </div>-->
                         </div>
                    </div>
                    
                </div>
                <!--Contenido ordenador-->
                <div class="col-lg-8 col-md-12 right-o-1 col-sm-12 pt-2" >
                    <div id="tabs-1">
                        <div class="d-none d-sm-none d-md-none d-lg-block"> <!--Contenido de ordenes ordenador-->
                            <div class="card p-4"> <!--Contenido de ordenes ordenador-->
                                <div class="row">
                                    <div class="col-lg-7 col-md-6 col-sm-12 m-auto pt-1">
                                        <h5 class="gelion-bold size-4">
                                            ID de órden: <span class="gelion-regular size-5 pr-3">545253887</span>
                                            <span class="date">
                                                Fecha de orden: <span class="gelion-thin">16 de Diciembre del 2021</span>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12 right-o right-r control-but">
                                        <button href="" class="print-a">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                            </svg> <span class="size-2">Print</span>
                                        </button>
                                    </div>
                                    <table class="table table-borderless">
                                        <tbody>
                                          <tr>
                                            <th scope="row">
                                                <h3 class="gelion-bold">
                                                    Plan: <span>Start 72 piezas</span>
                                                </h3>
                                                <li class="gelion-thin">
                                                    Teléfono: <span>+(52) 55 5284 0400</span>
                                                </li>
                                                <li class="gelion-thin">
                                                     Dirección: <span>Bosques de Alisos 47A - Piso 4, Bosques de las Lomas Ciudad de México</span>
                                                </li>
                                                <li class="gelion-thin">
                                                    C.P. 05120
                                                </li>
                                            </th>
                                          </tr>
                                        </tbody>
                                      </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-2">
                        <div class="d-block d-sm-block d-md-block d-lg-block"> <!--Contenido de cuenta ordenador-->
                            <div class="card p-4"> <!--Info personal-->
                                <div class="row control-but">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-right">
                                        <button class="gelion-bold size-2">Editar</button>
                                    </div>
                                    <table class="table table-borderless">
                                        <tbody>
                                          <tr>
                                            <th scope="row">
                                                <li class="gelion-thin">
                                                    Nombre: <span>Luis Nuñez</span>
                                                </li>
                                                <li class="gelion-thin">
                                                    Teléfono: <span>+(52) 55 5284 0400</span>
                                                </li>
                                                <li class="gelion-thin">
                                                    Fecha de nacimiento: <span>17/08/90</span>
                                                </li>
                                            </th>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                            <div class="card mt-3 p-4"> <!--Contraseña-->
                                <div class="row control-but">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-right">
                                        <button class="gelion-bold size-2">Editar</button>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                                        <li class="gelion-thin">Contraseña: <span>****</span></li>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-sm-none d-md-block d-lg-block">
                                <div class="row"><!--Direcciones ordenador-->
                                    <div class="col-lg-6 col-md-6 col-sm-12"><!--Direccion 1-->
                                        <div class="card mt-3 p-4">
                                            <h5 class="gelion-bold pb-3">
                                                Casa
                                            </h5>
                                            <li class="gelion-thin">
                                                Calle 23d, colonia. CP 97173
                                            </li>
                                            <li class="gelion-thin">
                                                Ciudad, Estado
                                            </li>
                                            <li class="gelion-regular pt-3">
                                                <div class="row control-but">
                                                    <div class="col text-left">
                                                        <button class="gelion-bold">
                                                            Editar
                                                        </button>
                                                    </div>
                                                    <div class="col text-right">
                                                        <button class="gelion-regular" style="color: red;">
                                                            Eliminar
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12"><!--Direccion 1-->
                                        <div class="card mt-3 p-4">
                                            <h5 class="gelion-bold pb-3">
                                                Oficina
                                            </h5>
                                            <li class="gelion-thin">
                                                Calle 23d, colonia. CP 97173
                                            </li>
                                            <li class="gelion-thin">
                                                Ciudad, Estado
                                            </li>
                                            <li class="gelion-regular pt-3">
                                                <div class="row control-but">
                                                    <div class="col text-left">
                                                        <button class="gelion-bold">
                                                            Editar
                                                        </button>
                                                    </div>
                                                    <div class="col text-right">
                                                        <button class="gelion-regular" style="color: red;">
                                                            Eliminar
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <div class="carousel mt-3">
                            <div class="carousel__contenedor">
                                <div class="carousel__lista5">
                                    <div class="carousel__elemento m-1">
                                        <div class="card p-4"> <!--Contenido de ordenes movil-->
                                            <div class="col-lg-6 col-md-12 col-sm-12"><!--Direccion 1-->
                                                    <h5 class="gelion-bold pb-3">
                                                        Casa
                                                    </h5>
                                                    <li class="gelion-thin">
                                                        Calle 23d, colonia. CP 97173
                                                    </li>
                                                    <li class="gelion-thin">
                                                        Ciudad, Estado
                                                    </li>
                                                    <li class="gelion-regular pt-3">
                                                        <div class="row control-but">
                                                            <div class="col text-left">
                                                                <button class="gelion-bold">
                                                                    Editar
                                                                </button>
                                                            </div>
                                                            <div class="col text-right">
                                                                <button class="gelion-regular" style="color: red;">
                                                                    Eliminar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel__elemento m-1">
                                        <div class="card p-4"> <!--Contenido de ordenes movil-->
                                            <div class="col-lg-6 col-md-12 col-sm-12"><!--Direccion 1-->
                                                    <h5 class="gelion-bold pb-3">
                                                        Casa
                                                    </h5>
                                                    <li class="gelion-thin">
                                                        Calle 23d, colonia. CP 97173
                                                    </li>
                                                    <li class="gelion-thin">
                                                        Ciudad, Estado
                                                    </li>
                                                    <li class="gelion-regular pt-3">
                                                        <div class="row control-but">
                                                            <div class="col text-left">
                                                                <button class="gelion-bold">
                                                                    Editar
                                                                </button>
                                                            </div>
                                                            <div class="col text-right">
                                                                <button class="gelion-regular" style="color: red;">
                                                                    Eliminar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabList" class="carousel__indicadores1"></div>
                        </div>
                    </div>
                </div>
                <!--end Contenido ordenador-->
            </div>
        </div>
        
    </div>
</section>
@push('js')
<script src="/js/show.js"></script>
@endpush
@endsection