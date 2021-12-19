@extends('layouts.rewear-azul')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('/css/blog.css')}}">
@endpush
<div class="content" style="padding-top: 5em;">
    <div class="container">
        <div class="d-block d-sm-block d-md-block d-lg-block">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <!--<div class="control-box  breadcrumb">
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                          </nav>
                    </div>-->
                    <div class="control-box p-3 main-content">
                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12">
                             <div class="titular pb-3">
                                <div class="text-center">
                                    <div class="row" style="color: gray;">
                                        <div class="col-12">
                                            <a href="" class="gelion-bold size-2" style="color: #000; text-decoration:none;">DOCUMENTAL</a>
                                        </div>
                                        <div class="col-12">
                                            <a href="" class="gelion-bold" style="color: #000; text-decoration:none;"><h2>SOLUCIONES AL CAMBIO CLIMÁTICO</h2>
                                            </a>
                                        </div>
                                        <div class="col size-2">Por: <span><a href="" style="color: gray; text-decoration:none;">Luis Nuñez</a></span> 
                                            <span class="pl-2">Agosto 10, 2021.</span>
                                         </div>
                                    </div>
                             </div>
                             </div>
                             <div class="tamano-blog pb-3" style="background-image: url(/img/blog/cabecera-blog.jpg);">
                             </div>
                             <div class="espacio-blog mt-3">
                                <p>La definición técnica de economía ambiental nos dice que es la rama de la economía que estudia los efectos de las políticas ambientales y les otorga un valor a los recursos naturales. La economía ambiental también se encarga de estudiar la mejor forma de regular la actividad económica para reducir el impacto ambiental y la importancia de hacerlo. <br> <br>
                                    A pesar de que los estudios de la enconomía ambiental se remontan a las décadas de los 50’s, es en la última década en la que más crecimiento e importancia a tenido, esto debido al gran incremento de contaminación hacia el medio ambiente, muchos países, siendo potencia los países europeos, han apostado a la regulación y el cuidado al planeta con reglas y normas que lo protegen a la vez que impulsa la actividad comercial. 
                                </p>
                             </div>
                             <li class="gelion-bold pl-3"> <!--share-->
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
                         </div>
                     </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12"> <!--Sidebar-->
                    <div class="control-box pl-3 pr-3 pt-2 sidebar">
                        <div class="filtro">
                            <div class="form-outline form-block">
                                <input type="search" placeholder="Buscar" class="search">
                            </div>
                        </div>
                    </div>
                    <div class="control-box pl-3 mt-3 sidebar mb-2">
                        <a href="" style="color: #000; text-decoration: none;">
                            <div class="row">
                            <div class="col-2 thumb">
                                <img src="{{asset('/img/blog/destacada.png')}}" class="fill" >
                            </div>
                            <div class="col-9 pl-5 m-auto">
                                <h4 class="gelion-bold size-2">Nuestro planeta necesita tu ayuda <br>
                                    <span class="gelion-thin" style="color: gray;">September 22, 2020</span>
                                </h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    <div class="control-box p-3">
                        <div class="filtro"> <!--Filtro-->
                            <p class="gelion-bold">CATEGORÍAS</p>
                            <div class="form-group d-flex justify-center">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Noticias
                                </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Rewear
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection