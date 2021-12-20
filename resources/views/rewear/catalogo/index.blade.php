@extends('layouts.rewear-azul')
@section('content')
<div class="content" style="padding-top: 5em;">
    <div class="container">
        <div class="d-none d-sm-none d-md-none d-lg-block">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12"><!--filtros-->
                    <div class="control-box p-3">
                        <div class="filtro"> <!--Filtro-->
                            <p class="gelion-bold">FIT</p>
                            <div class="form-group d-flex justify-center">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Hombre">
                                <label class="form-check-label" id="mujer" for="gridCheck">
                                    Hombre
                                </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Mujer
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="filtro"> <!--Filtro-->
                            <p class="gelion-bold">TIPO DE MANGA  </p>
                            <div class="form-group d-flex justify-center">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Manga corta
                                </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Manga larga
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="filtro"> <!--Filtro-->
                            <p class="gelion-bold">POR COLOR</p>
                            <div class="form-group d-flex justify-center">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    <div class="text-center m-auto">
                                        <div style="background-color: #000; height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;">
                                            <span class="icon-hoja-productorewear ico-sm" style="color: #fff;"></span>
                                        </div>
                                    </div>
                                </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    <div class="text-center m-auto">
                                        <div style="background-color: #003057; height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;">
                                            <span class="icon-hoja-productorewear ico-sm" style="color: #fff;"></span>
                                        </div>
                                    </div>
                                </label>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-center">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    <div class="text-center m-auto">
                                        <div style="background-color: gray; height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;">
                                            <span class="icon-hoja-productorewear ico-sm" style="color: #fff;"></span>
                                        </div>
                                    </div>
                                </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    <div class="text-center m-auto">
                                        <div style="background-color: red; height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;">
                                            <span class="icon-hoja-productorewear ico-sm" style="color: #fff;"></span>
                                        </div>
                                    </div>
                                </label>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-center">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    <div class="text-center m-auto">
                                        <div style="background-color: #fff; height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;">
                                            <span class="icon-hoja-productorewear ico-sm" style="color: #000;"></span>
                                        </div>
                                    </div>
                                </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    <div class="text-center m-auto">
                                        <div style="background-color: rgb(252, 249, 210); height: 23px; border-style: solid; border-width: thin; border-color:#000; width: 23px; border-radius: 23px;">
                                            <span class="icon-hoja-productorewear ico-sm" style="color: #000;"></span>
                                        </div>
                                    </div>
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="filtro"> <!--Filtro-->
                            <p class="gelion-bold">POR TALLA</p>
                            <div class="form-group d-flex justify-center">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    S
                                </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    M
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="control-box p-2 breadcrumb">
                        <img src="{{asset('/img/catalogo/cabecera.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="control-box p-3 main-content">
                     <div class="row">
                         <div class="col-lg-4 col-md-4 col-sm-6">
                             <div class="card espacio-card">
                                <div class="contenedor">
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto-2.png')}}" class="fill" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto-3.png')}}" class="top fill" alt="Productos del catálogo">
                                    </a>
                                 </div>
                                 <a href="" style="color: #000; text-decoration: none;">
                                     <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                </a>
                                 <li class="gelion-bold">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado</li>
                                 <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                 </li>
                                 <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                 </li>
                                 <li class="gelion-thin">Regular fit</li>
                                 <div class="pt-3 d-flex">
                                    <div class="hoja">
                                        <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                                    </div>
                                    
                                    
                                </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card espacio-card">
                                <div class="contenedor">
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto.png')}}" class="top img-fluid" alt="Productos del catálogo">
                                    </a>
                                 </div>
                                 <a href="" style="color: #000; text-decoration: none;">
                                     <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                </a>
                                 <li class="gelion-bold">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado</li>
                                 <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                 </li>
                                 <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                 </li>
                                 <li class="gelion-thin">Regular fit</li>
                                 <div class="pt-3 d-flex">
                                    <div class="hoja">
                                        <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                                    </div>
                                    
                                    
                                </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card espacio-card">
                                <div class="contenedor">
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto.png')}}" class="top img-fluid" alt="Productos del catálogo">
                                    </a>
                                 </div>
                                 <a href="" style="color: #000; text-decoration: none;">
                                     <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                </a>
                                 <li class="gelion-bold">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado</li>
                                 <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                 </li>
                                 <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                 </li>
                                 <li class="gelion-thin">Regular fit</li>
                                 <div class="pt-3 d-flex">
                                    <div class="hoja">
                                        <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                         </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="d-none d-sm-none d-md-block d-lg-none"> <!--Producto MD-->
                <div class="col-12 pb-4">
                    <img src="{{asset('/img/catalogo/cabecera.png')}}" class="img-fluid" alt="">
                </div>
                <div class="row">
                    <div class="col-md-3 fixed">
                        <div class="control-box p-3">
                            <div class="filtro"> <!--Filtro-->
                                <p class="gelion-bold">FIT</p>
                                <div class="form-group d-flex justify-center">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Hombre">
                                    <label class="form-check-label" id="mujer" for="gridCheck">
                                        Hombre
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Mujer
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filtro"> <!--Filtro-->
                                <p class="gelion-bold">TIPO DE MANGA  </p>
                                <div class="form-group d-flex justify-center">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Manga corta
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Manga larga
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filtro"> <!--Filtro-->
                                <p class="gelion-bold">POR COLOR</p>
                                <div class="form-group d-flex justify-center">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Negro
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Marino
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-center">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Gris
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Rojo
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-center">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Blanco
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Natural
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filtro"> <!--Filtro-->
                                <p class="gelion-bold">POR TALLA</p>
                                <div class="form-group d-flex justify-center">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Hombre
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Mujer
                                    </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col">
                                <div class="card espacio-card">
                                <div class="contenedor-7">
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto-2.png')}}" class="fill" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto.png')}}" class="top fill" alt="Productos del catálogo">
                                    </a>
                                 </div>
                                 <a href="" style="color: #000; text-decoration: none;">
                                     <h5 class="gelion-bold pt-2 size-product-1">Modelo Bahía</h5>
                                </a>
                                 <li class="gelion-bold">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado</li>
                                 <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                 </li>
                                 <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                 </li>
                                 <li class="gelion-thin">Regular fit</li>
                                 <div class="pt-3 d-flex">
                                    <div class="hoja">
                                        <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            </div>
                            <div class="col">
                                <div class="card espacio-card">
                                <div class="contenedor-7">
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto-2.png')}}" class="fill" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="{{asset('/img/catalogo/producto.png')}}" class="top fill" alt="Productos del catálogo">
                                    </a>
                                 </div>
                                 <a href="" style="color: #000; text-decoration: none;">
                                     <h5 class="gelion-bold pt-2 size-product-1">Modelo Bahía</h5>
                                </a>
                                 <li class="gelion-bold">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado</li>
                                 <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                 </li>
                                 <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                 </li>
                                 <li class="gelion-thin">Regular fit</li>
                                 <div class="pt-3 d-flex">
                                    <div class="hoja">
                                        <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none"><!--Producto SM-->
                <div class="col-12 pb-4">
                    <img src="{{asset('/img/catalogo/cabecera.png')}}" class="img-fluid" alt="">
                </div>
                <div class="row">
                    <div class="col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="card espacio-card">
                                    <div class="contenedor-2">
                                        <a href="/catalogo/producto.html">
                                            <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                                        </a>
                                        <a href="/catalogo/producto.html">
                                            <img src="{{asset('/img/catalogo/producto.png')}}" class="top-1 img-fluid" alt="Productos del catálogo">
                                        </a>
                                     </div>
                                     <a href="" style="color: #000; text-decoration: none;">
                                         <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                    </a>
                                     <li class="gelion-thin size-product">50% Algodón reciclado pre consumo + 50% poliéster reciclado</li>
                                     <!--<li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                     </li>
                                     <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                     </li>
                                     <li class="gelion-thin">Regular fit</li>-->
                                     <div class="pt-3 d-flex">
                                        <div class="hoja">
                                            <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card espacio-card">
                                    <div class="contenedor-2">
                                        <a href="/catalogo/producto.html">
                                            <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                                        </a>
                                        <a href="/catalogo/producto.html">
                                            <img src="{{asset('/img/catalogo/producto.png')}}" class="top-1 img-fluid" alt="Productos del catálogo">
                                        </a>
                                     </div>
                                     <a href="" style="color: #000; text-decoration: none;">
                                         <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                    </a>
                                     <li class="gelion-thin size-product">50% Algodón reciclado pre consumo + 50% poliéster reciclado</li>
                                     <!--<li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                     </li>
                                     <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                     </li>
                                     <li class="gelion-thin">Regular fit</li>-->
                                     <div class="pt-3 d-flex">
                                        <div class="hoja">
                                            <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="card espacio-card">
                                    <div class="contenedor-2">
                                        <a href="/catalogo/producto.html">
                                            <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                                        </a>
                                        <a href="/catalogo/producto.html">
                                            <img src="{{asset('/img/catalogo/producto.png')}}" class="top-1 img-fluid" alt="Productos del catálogo">
                                        </a>
                                     </div>
                                     <a href="" style="color: #000; text-decoration: none;">
                                         <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                    </a>
                                     <li class="gelion-thin size-product">50% Algodón reciclado pre consumo + 50% poliéster reciclado</li>
                                     <!--<li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                     </li>
                                     <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                     </li>
                                     <li class="gelion-thin">Regular fit</li>-->
                                     <div class="pt-3 d-flex">
                                        <div class="hoja">
                                            <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card espacio-card">
                                    <div class="contenedor-2">
                                        <a href="/catalogo/producto.html">
                                            <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                                        </a>
                                        <a href="/catalogo/producto.html">
                                            <img src="{{asset('/img/catalogo/producto.png')}}" class="top-1 img-fluid" alt="Productos del catálogo">
                                        </a>
                                     </div>
                                     <a href="" style="color: #000; text-decoration: none;">
                                         <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                                    </a>
                                     <li class="gelion-thin size-product">50% Algodón reciclado pre consumo + 50% poliéster reciclado</li>
                                     <!--<li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                                     </li>
                                     <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                                     </li>
                                     <li class="gelion-thin">Regular fit</li>-->
                                     <div class="pt-3 d-flex">
                                        <div class="hoja">
                                            <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                                        </div>
                                        
                                        
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