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
                         <div class="col-lg-6 col-md-6 col-sm-12">
                             <div class="tamano">
                                <img src="{{asset('/img/blog/destacada.png')}}" class="img-fluid">
                             </div>
                             <div class="text-center pt-2">
                                    <div class="row" style="color: gray;">
                                        <div class="col-12">
                                            <a href="" class="gelion-bold size-2" style="color: #000; text-decoration:none;">DOCUMENTAL</a>
                                        </div>
                                        <div class="col-12">
                                            <a href="" class="gelion-bold" style="color: #000; text-decoration:none;">SOLUCIONES AL CAMIO CLIMÁTICO</a>
                                        </div>
                                        <div class="col size-2">Por: <span><a href="" style="color: gray; text-decoration:none;">Luis Nuñez</a></span> 
                                            <span class="pl-2">Agosto 10, 2021.</span>
                                         </div>
                                    </div>
                             </div>
                             <div class="text-center">
                                <p class="gelion-thin size-2" style="color: #000; font-size: 0.9em; line-height: 1.2em;">La definición técnica de economía ambiental nos dice que es la rama de la economía que estudia los efectos de las políticas ambientales y les otorga un valor a los recursos naturales... <br> <br>
                                    <span>
                                        <a href="" class="gelion-bold size-2" style="color: #000; text-decoration: none;">CONTINUAR LEYENDO</a>
                                    </span>
                                </p>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12">  
                            <div class="tamano">
                                <img src="{{asset('/img/blog/destacada.png')}}" class="img-fluid">
                             </div>
                             <div class="text-center pt-2">
                                    <div class="row" style="color: gray;">
                                        <div class="col-12">
                                            <a href="" class="gelion-bold size-2" style="color: #000; text-decoration:none;">DOCUMENTAL</a>
                                        </div>
                                        <div class="col-12">
                                            <a href="" class="gelion-bold" style="color: #000; text-decoration:none;">SOLUCIONES AL CAMIO CLIMÁTICO</a>
                                        </div>
                                        <div class="col size-2">Por: <span><a href="" style="color: gray; text-decoration:none;">Luis Nuñez</a></span> 
                                            <span class="pl-2">Agosto 10, 2021.</span>
                                         </div>
                                    </div>
                             </div>
                             <div class="text-center">
                                <p class="gelion-thin size-2" style="color: #000; font-size: 0.9em; line-height: 1.2em;">La definición técnica de economía ambiental nos dice que es la rama de la economía que estudia los efectos de las políticas ambientales y les otorga un valor a los recursos naturales... <br> <br>
                                    <span>
                                        <a href="/blog/articulo.html" class="gelion-bold size-2" style="color: #000; text-decoration: none;">CONTINUAR LEYENDO</a>
                                    </span>
                                </p>
                             </div>         
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12">  
                            <div class="tamano">
                                <img src="{{asset('/img/blog/destacada.png')}}" class="img-fluid">
                             </div>
                             <div class="text-center pt-2">
                                    <div class="row" style="color: gray;">
                                        <div class="col-12">
                                            <a href="" class="gelion-bold size-2" style="color: #000; text-decoration:none;">DOCUMENTAL</a>
                                        </div>
                                        <div class="col-12">
                                            <a href="" class="gelion-bold" style="color: #000; text-decoration:none;">SOLUCIONES AL CAMIO CLIMÁTICO</a>
                                        </div>
                                        <div class="col size-2">Por: <span><a href="" style="color: gray; text-decoration:none;">Luis Nuñez</a></span> 
                                            <span class="pl-2">Agosto 10, 2021.</span>
                                         </div>
                                    </div>
                             </div>
                             <div class="text-center">
                                <p class="gelion-thin size-2" style="color: #000; font-size: 0.9em; line-height: 1.2em;">La definición técnica de economía ambiental nos dice que es la rama de la economía que estudia los efectos de las políticas ambientales y les otorga un valor a los recursos naturales... <br> <br>
                                    <span>
                                        <a href="/blog/articulo.html" class="gelion-bold size-2" style="color: #000; text-decoration: none;">CONTINUAR LEYENDO</a>
                                    </span>
                                </p>
                             </div>         
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12">  
                            <div class="tamano">
                                <img src="{{asset('/img/blog/destacada.png')}}" class="img-fluid">
                             </div>
                             <div class="text-center pt-2">
                                    <div class="row" style="color: gray;">
                                        <div class="col-12">
                                            <a href="" class="gelion-bold size-2" style="color: #000; text-decoration:none;">DOCUMENTAL</a>
                                        </div>
                                        <div class="col-12">
                                            <a href="" class="gelion-bold" style="color: #000; text-decoration:none;">SOLUCIONES AL CAMIO CLIMÁTICO</a>
                                        </div>
                                        <div class="col size-2">Por: <span><a href="" style="color: gray; text-decoration:none;">Luis Nuñez</a></span> 
                                            <span class="pl-2">Agosto 10, 2021.</span>
                                         </div>
                                    </div>
                             </div>
                             <div class="text-center">
                                <p class="gelion-thin size-2" style="color: #000; font-size: 0.9em; line-height: 1.2em;">La definición técnica de economía ambiental nos dice que es la rama de la economía que estudia los efectos de las políticas ambientales y les otorga un valor a los recursos naturales... <br> <br>
                                    <span>
                                        <a href="/blog/articulo.html" class="gelion-bold size-2" style="color: #000; text-decoration: none;">CONTINUAR LEYENDO</a>
                                    </span>
                                </p>
                             </div>         
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