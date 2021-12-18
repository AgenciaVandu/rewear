@extends('layouts.rewear-azul')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('/css/products.css')}}">
<link rel="stylesheet" href="{{asset('/lib/icomoon-v1.0/style.css')}}">
@endpush
<section id="product">
    <div class="container">
        <div class="product-inner">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 espacio-pr">
                   <div class="d-none d-sm-none d-md-none d-lg-block">
                    <div class="row boton-producto">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="lateral">
                                <button type="button" href="" id="i-uno">
                                    <img src="/img/catalogo/producto/1.png" class="fill" alt="">
                                </button>
                            </div>
                            <div class="lateral btn-pad">
                               <button type="button"  id="i-dos">
                                    <img src="/img/catalogo/producto/2.png" class="fill" alt="">
                               </button>
                            </div>
                            <div class="lateral btn-pad">
                                <button type="button" id="i-tres">
                                    <img src="/img/catalogo/producto/3.png" class="fill" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="principal" id="primera">
                                <img src="/img/catalogo/producto/4.png" class="fill" alt="">
                            </div>
                            <div class="principal" id="segunda">
                                <img src="/img/catalogo/producto/4-1.png" class="fill" alt="">
                            </div>
                            <div class="principal" id="tercera">
                                <img src="/img/catalogo/producto/4-2.png" class="fill" alt="">
                            </div>
                        </div>
                    </div>
                   </div>
                    <!--Movil images-->
                    <div class="d-block d-sm-block d-md-block d-lg-none"> <!--movil-->
                        <div class="carousel">
                            <div class="carousel__contenedor">
                                <div class="carousel__lista text-center">
                                    <div class="carousel__elemento m-1">
                                        <img src="/img/catalogo/producto/4.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="carousel__elemento m-1">
                                        <img src="/img/catalogo/producto/4-1.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="carousel__elemento m-1">
                                        <img src="/img/catalogo/producto/4-2.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div role="tabList" class="carousel__indicadores1"></div>
                        </div>
                    </div>
                    <!--Movil images-->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h1 class="gelion-bold">Modelo Bahía</h1>
                    <p class="gelion-thin" style="color: gray;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi explicabo voluptate dolore minus velit iste quia corporis illum blanditiis et.</p>
                    <li class="gelion-bold pt-2">
                        <div class="row">
                            <div class="col">
                                Medidas de la modelo:
                            </div>
                            <div class="col-8 gelion-thin">
                                1.68mts
                            </div>
                        </div>
                    </li>
                    <li class="gelion-bold pt-3">
                        <div class="row">
                            <div class="col">
                                Talla de la modelo:
                            </div>
                            <div class="col-8 gelion-thin">
                                S
                            </div>
                        </div>
                    </li>
                    <li class="gelion-bold pt-3">
                        <div class="row">
                            <div class="col m-auto">
                                Colores disponibles
                            </div>
                            <div class="col-8 gelion-thin">
                                <div class="btn-group">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                      Elige un color
                                    </button>
                                    <div class="dropdown-menu modelos-dropdown">
                                        <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                                            <label class="btn btn-outline-dark">
                                                <input type="checkbox" name="countries[]" value="negro" autocomplete="off"> Negro
                                            </label>
                                            <label class="btn btn-outline-dark">
                                                <input type="checkbox" name="countries[]" value="negro" autocomplete="off"> Rojo
                                            </label>
                                            <label class="btn btn-outline-dark">
                                                <input type="checkbox" name="countries[]" value="negro" autocomplete="off">Natural
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="gelion-bol pt-3 sizes gelion-regular">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-dark">
                                <input type="checkbox" name="talla" value="Small" autocomplete="off" checked> S
                            </label>
                        </div>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-dark">
                                <input type="checkbox" name="talla" value="Medium" autocomplete="off"> M
                            </label>
                        </div>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-dark">
                                <input type="checkbox" name="talla" value="Large" autocomplete="off"> L
                            </label>
                        </div>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-dark">
                                <input type="checkbox" name="talla" value="Xtra-large" autocomplete="off"> XL
                            </label>
                        </div>
                    </li>
                    <li class="gelion-bold pt-3 text-left productos-carrito">
                        <div class="row pb-2">
                            <div class="col-1">
                                <div style="background-color: #003057; height: 30px; width: 30px; border-radius: 30px;">
                                    <span class="icon-hoja-productorewear ico-xs" style="color: #fff;"></span>
                                </div>
                            </div>
                            <div class="col m-auto">
                                <div id="productos-carrito">
                                    <input id="menos" type="button" name="minus" value="-" onclick="minus(1)">
                                    <input id="cantidad" type="text" name="amount" value="6">
                                    <input id="mas" type="button" name="plus" value="+" onclick="plus(1)">
                                </div>
                            </div>
                        </div>
                        <small class="gelion-regular">* Se agregarán en múltipos de 6</small>
                    </li>
                    <li class="gelion-bold pt-3"><a href="" style="color: #000; text-decoration: none;">Descargar PDF</a></li>
                    <li class="gelion-bold pt-3">
                        <div class="row">
                            <div class="col">
                                <a href="/catalogo/cart.html" class="btn btn-secondary">
                                    Agregar prenda
                                </a>
                                
                            </div>
                            <div class="col gelion-bold m-auto">
                               <a href="" style="color: #000; text-decoration: none;"> Tabla de medidas</a>
                            </div>
                        </div>
                    </li>
                    <li class="gelion-bold pt-3">
                        <p><img src="/img/catalogo/hoja-1.svg" alt="Producto ecológico">
                        <span class="pl-2 m-auto">
                            50% algodón reciclado, 50% poliéster reciclado.
                        </span></p>
                    </li>
                    <li class="gelion-bold pt-1">
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
                    <li class="pt-4">
                        <img src="/img/catalogo/Etiqueta-de-lavado.png" class="img-fluid" alt="">
                    </li>
                </div>
            </div>
            
        </div>
    </div>
</section>
<section id="cruzada" class="pt-5 pb-5">
    <div class="container cruzada">
        <h5 class="gelion-bold text-center pt-3 pb-4">TAMBIÉN TE PODRÍA INTERESAR</h5>
        <div class="d-none d-sm-none d-md-none d-lg-block"> 
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card espacio-card">
                       <div class="contenedor-1">
                           <a href="">
                               <img src="/img/catalogo/producto-2.png" class="img-fluid" alt="Productos del catálogo">
                           </a>
                           <a href="">
                               <img src="/img/catalogo/producto.png" class="top img-fluid" alt="Productos del catálogo">
                           </a>
                        </div>
                        <a href="" style="color: #000; text-decoration: none;">
                            <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                       </a>
                        <li class="gelion-bold size-2">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado</li>
                        <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                        </li>
                        <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                        </li>
                        <li class="gelion-thin">Regular fit</li>
                        <div class="pt-3 d-flex">
                           <div class="hoja">
                               <img src="/img/catalogo/rewear.svg" alt="">
                           </div>
                           
                           
                       </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="card espacio-card">
                       <div class="contenedor-1">
                           <a href="">
                               <img src="/img/catalogo/producto-2.png" class="img-fluid" alt="Productos del catálogo">
                           </a>
                           <a href="">
                               <img src="/img/catalogo/producto.png" class="top img-fluid" alt="Productos del catálogo">
                           </a>
                        </div>
                        <a href="" style="color: #000; text-decoration: none;">
                            <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                       </a>
                        <li class="gelion-bold size-2">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado</li>
                        <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                        </li>
                        <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                        </li>
                        <li class="gelion-thin">Regular fit</li>
                        <div class="pt-3 d-flex">
                           <div class="hoja">
                               <img src="/img/catalogo/rewear.svg" alt="">
                           </div>
                           
                           
                       </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card espacio-card">
                        <div class="contenedor-1">
                            <a href="">
                                <img src="/img/catalogo/producto-2.png" class="img-fluid" alt="Productos del catálogo">
                            </a>
                            <a href="">
                                <img src="/img/catalogo/producto.png" class="top img-fluid" alt="Productos del catálogo">
                            </a>
                         </div>
                         <a href="" style="color: #000; text-decoration: none;">
                             <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                        </a>
                         <li class="gelion-bold size-2">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado</li>
                         <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                         </li>
                         <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                         </li>
                         <li class="gelion-thin">Regular fit</li>
                         <div class="pt-3 d-flex">
                            <div class="hoja">
                                <img src="/img/catalogo/rewear.svg" alt="">
                            </div>
                            
                            
                        </div>
                     </div>
                 </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="card espacio-card">
                       <div class="contenedor-1">
                           <a href="">
                               <img src="/img/catalogo/producto-2.png" class="img-fluid" alt="Productos del catálogo">
                           </a>
                           <a href="">
                               <img src="/img/catalogo/producto.png" class="top img-fluid" alt="Productos del catálogo">
                           </a>
                        </div>
                        <a href="" style="color: #000; text-decoration: none;">
                            <h5 class="gelion-bold pt-2">Modelo Bahía</h5>
                       </a>
                        <li class="gelion-bold size-2">50% Algodón reciclado pre consumo <br> + 50% poliéster reciclado</li>
                        <li class="gelion-thin">Peso de tela: <span>150gr/m2 (5.31 oz/yd2)</span>
                        </li>
                        <li class="gelion-thin">Tipo de tejido: <span>Jersey</span>
                        </li>
                        <li class="gelion-thin">Regular fit</li>
                        <div class="pt-3 d-flex">
                           <div class="hoja">
                               <img src="/img/catalogo/rewear.svg" alt="">
                           </div>
                           
                           
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-sm-none d-md-block d-lg-none"> <!--Producto MD-->
            <div class="row">
                <div class="col-md-6">
                    <div class="card espacio-card">
                        <div class="contenedor-4">
                            <a href="/catalogo/producto.html">
                                <img src="/img/catalogo/producto-2.png" class="fill" alt="Productos del catálogo">
                            </a>
                            <a href="/catalogo/producto.html">
                                <img src="/img/catalogo/producto.png" class="top fill" alt="Productos del catálogo">
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
                                <img src="/img/catalogo/rewear.svg" alt="">
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-sm-block d-md-none d-lg-none"><!--Producto SM-->
            <div class="row">
                <div class="col-sm-6 pt-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="card espacio-card">
                                <div class="contenedor-2">
                                    <a href="/catalogo/producto.html">
                                        <img src="/img/catalogo/producto-2.png" class="img-fluid" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="/img/catalogo/producto.png" class="top-1 img-fluid" alt="Productos del catálogo">
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
                                        <img src="/img/catalogo/rewear.svg" alt="">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card espacio-card">
                                <div class="contenedor-2">
                                    <a href="/catalogo/producto.html">
                                        <img src="/img/catalogo/producto-2.png" class="img-fluid" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="/img/catalogo/producto.png" class="top-1 img-fluid" alt="Productos del catálogo">
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
                                        <img src="/img/catalogo/rewear.svg" alt="">
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
                                        <img src="/img/catalogo/producto-2.png" class="img-fluid" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="/img/catalogo/producto.png" class="top-1 img-fluid" alt="Productos del catálogo">
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
                                        <img src="/img/catalogo/rewear.svg" alt="">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card espacio-card">
                                <div class="contenedor-2">
                                    <a href="/catalogo/producto.html">
                                        <img src="/img/catalogo/producto-2.png" class="img-fluid" alt="Productos del catálogo">
                                    </a>
                                    <a href="/catalogo/producto.html">
                                        <img src="/img/catalogo/producto.png" class="top-1 img-fluid" alt="Productos del catálogo">
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
                                        <img src="/img/catalogo/rewear.svg" alt="">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
<script src="{{asset('/js/producto.js')}}"></script>
@endpush
@endsection