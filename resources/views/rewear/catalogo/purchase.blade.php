@extends('layouts.rewear-azul')
@section('content')
@push('css')
<link rel="stylesheet" href="/css/products.css">
@endpush
<section id="cart">
    <div class="container">
        <div class="d-block d-sm-block d-md-block d-lg-block">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 pt-2">
                    <form>
                        <div class="form-row">
                          <div class="col gelion-bold">
                            <label for="formGroupExampleInput">Nombres*</label>
                            <input type="text" class="form-control" id="name" required>
                          </div>
                          <div class="col gelion-bold">
                            <label for="formGroupExampleInput">Apellidos*</label>
                            <input type="text" class="form-control" id="apellidos" required>
                          </div>
                          <div class="col gelion-bold">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                          </div>
                        </div>
                        <div class="pt-3 gelion-bold" id="f-emprendedor"> <!--Emprendedor-->
                            <label for="formGroupExampleInput">Nombre de tu empresa (opcional)</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group gelion-bold pt-3">
                            <label for="inputAddress">Dirección</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="8mile" required>
                        </div>
                        <div class="form-group gelion-bold">
                            <label for="inputCity">Ciudad</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="México" required>
                        </div>
                        <div class="form-group gelion-bold">
                            <label for="inputCity">Estado</label>
                            <input type="text" class="form-control" id="inputState" placeholder="México" required>
                        </div>
                        <div class="form-group gelion-bold">
                            <label for="inputCity">Código postal</label>
                            <input type="text" class="form-control" id="inputState" placeholder="México" required>
                        </div>
                        <div class="mb-3 gelion-bold">
                            <label for="validationTextarea">Mensaje</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Déjanos tu mensaje" required></textarea>
                        </div>
                        <div type="submit" class="btn btn-primary gelion-bold mt-2">Regresar</div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 pt-2">
                    <div class="card p-4">
                        <p class="gelion-bold">Total a pagar</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="gelion-thin">
                                    Subtotal
                                </p>
                            </div>
                            <div class="col-6 text-right">
                                <p class="gelion-thin">
                                    $7,200.00
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="gelion-thin">
                                    Impuestos
                                </p>
                            </div>
                            <div class="col-6 text-right">
                                <p class="gelion-thin">
                                    $1,152.00
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="gelion-thin">
                                    Precio total
                                </p>
                            </div>
                            <div class="col-6 text-right">
                                <p class="gelion-thin">
                                    $8,352.00
                                </p>
                            </div>
                        </div>
                        <div class="btn btn-secondary gelion-bold mt-2">Comprar ahora</div>
                        <div class="col-12 gelion-bold text-center pt-3">
                            <p>
                                <span class="gelion-thin">Precio más costo de envío por cotizar</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 gelion-bold pt-4">
                        <p>Política de privacidad:</p>
                        <p class="gelion-thin size-2 text-justify">Como parte de los mecanismos para manifestar negativa al tratamiento de datos personales, en todo momento podrá consultar su información, rectificarla u oponerte al tratamiento de tus datos personales, por lo que para ello podrá llamar a los teléfonos (999) 999 9999 o contacto@myrewear.com</p>
                    </div>
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
                               <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                           </a>
                           <a href="">
                               <img src="{{asset('/img/catalogo/producto.png')}}" class="top img-fluid" alt="Productos del catálogo">
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
                               <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                           </div>
                           
                           
                       </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="card espacio-card">
                       <div class="contenedor-1">
                           <a href="">
                               <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                           </a>
                           <a href="">
                               <img src="{{asset('/img/catalogo/producto.png')}}" class="top img-fluid" alt="Productos del catálogo">
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
                               <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                           </div>
                           
                           
                       </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card espacio-card">
                        <div class="contenedor-1">
                            <a href="">
                                <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                            </a>
                            <a href="">
                                <img src="{{asset('/img/catalogo/producto.png')}}" class="top img-fluid" alt="Productos del catálogo">
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
                                <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
                            </div>
                            
                            
                        </div>
                     </div>
                 </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                   <div class="card espacio-card">
                       <div class="contenedor-1">
                           <a href="">
                               <img src="{{asset('/img/catalogo/producto-2.png')}}" class="img-fluid" alt="Productos del catálogo">
                           </a>
                           <a href="">
                               <img src="{{asset('/img/catalogo/producto.png')}}" class="top img-fluid" alt="Productos del catálogo">
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
                               <img src="{{asset('/img/catalogo/rewear.svg')}}" alt="">
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
        <div class="d-block d-sm-block d-md-none d-lg-none"><!--Producto SM-->
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
</section>
@endsection