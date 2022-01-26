@extends('layouts.rewear-azul')
@section('content')
    <section id="contact-page">
        <div class="container">
            <div class="mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.0651584025977!2d-89.74889418532065!3d20.869423786084877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56136748fe1925%3A0x765bc4fc5a9d68c8!2sRewear!5e0!3m2!1ses-419!2smx!4v1638901242118!5m2!1ses-419!2smx"
                    width="" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-lg-6 col-md-12 col-sm-12 info-1">
                    <form>
                        <div class="form-row">
                            <div class="col gelion-bold">
                                <label for="formGroupExampleInput">{{ __('Nombres*') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col gelion-bold">
                                <label for="formGroupExampleInput">{{ __('Apellidos*') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col gelion-bold">
                                <label for="phone">{{ __('Telefono:') }}</label>
                                <input type="tel" id="phone" class="form-control" name="phone"
                                    pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <!--botones-->
                            <div class="col-12">
                                <span class="gelion-bold">Figura</span>
                            </div>
                            <div class="col pt-3">
                                <button type="button" id="emprendedor" class="gelion-bold btn btn-warning"
                                    aria-pressed=“true”>{{ __('Emprendedor') }}</button>
                            </div>
                            <div class="col pt-3">
                                <button type="button" id="asociacion" class="gelion-bold btn btn-warning"
                                    aria-pressed=“true”>{{ __('Asociación') }}</button>
                            </div>
                            <div class="col pt-3">
                                <button type="button" id="distribuidor" class="gelion-bold btn btn-warning"
                                    aria-pressed=“true”>{{ __('Distribuidor') }}</button>
                            </div>
                        </div>
                        <div class="pt-3 gelion-bold" id="f-emprendedor">
                            <!--Emprendedor-->
                            <label for="formGroupExampleInput">{{ __('Nombre de tu empresa') }}</label>
                            <input type="text" class="form-control" required>
                            <div class="pt-3">
                                <label for="formGroupExampleInput">{{ __('¿Cuál es el giro de tu proyecto?') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="pt-3">
                                <label for="formGroupExampleInput">{{ __('¿En qué plan estás interesado?') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="pt-3 gelion-bold" id="f-asociacion">
                            <!--Asociacion-->
                            <label for="formGroupExampleInput">{{ __('Nombre de la asociación') }}</label>
                            <input type="text" class="form-control" required>
                            <div class="pt-3">
                                <label for="formGroupExampleInput">{{ __('¿A qué se dedica la asociación?') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="pt-3">
                                <label for="formGroupExampleInput">{{ __('¿Cuántas personas forman parte?') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="pt-3">
                                <label
                                    for="formGroupExampleInput">{{ __('¿Qué apoyo requieres de nuestra parte?') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="pt-3 gelion-bold" id="f-distribuidor">
                            <!--Distribuidor-->
                            <label for="formGroupExampleInput">{{ __('Nombre de tu empresa') }}</label>
                            <input type="text" class="form-control" required>
                            <div class="pt-3">
                                <label
                                    for="formGroupExampleInput">{{ __('¿En que cantidad de playeras en las que estás interesado?') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="pt-3">
                                <label for="formGroupExampleInput">{{ __('¿Cuál es la frecuencia de compra?') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="pt-3">
                                <label for="formGroupExampleInput">{{ __('¿En qué colores estás interesado?') }}</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group gelion-bold pt-3">
                            <label for="inputCity">{{ __('Ciudad') }}</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="México" required>
                        </div>
                        <div class="mb-3 gelion-bold">
                            <label for="validationTextarea">{{ __('Mensaje') }}</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Déjanos tu mensaje"
                                required></textarea>

                        </div>
                        <div type="submit" class="btn btn-primary gelion-bold mt-2">{{ __('Enviar mensaje') }}</div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 info-2">
                    <!--contacto-->
                    <h2 class="gelion-bold">
                        {{ __(' ¿Eres una asociación <br> o quieres ser distribuidor?') }}
                    </h2>
                    <p class="gelion-thin">
                        {{ __('Si distribuyes camisetas al mayoreo, tenemos una propuesta especial para ti. Con Rewear, ofrece a tus clientes una alternativa sustentable que genere mayor valor agregado a sus productos.<br><br>¡Únete al movimiento de cero desperdicios y fomenta que más marcas cuiden el ambiente!') }}
                    </p>
                    <li>
                        <div class="row gelion-thin ">
                            <div class="col-1">
                                <img src="{{ asset('/img/user/ubicacion.svg') }}" width="50">
                            </div>
                            <div class="col-11 pl-5 m-auto">
                                @if (session('local') == 'es')
                                    Dirección: Uman, Yucatán.
                                @else
                                    RD TEXTILES, LLC 3750 NW 28th ST Unit 414 Miami, FL. 33142
                                    TEL (305) 850 2578
                                @endif
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row gelion-thin ">
                            <div class="col-1">
                                <img src="{{ asset('/img/user/Telefono.svg') }}" width="50">
                            </div>
                            <div class="col-11 pl-5 m-auto">
                                {{ __('Teléfono:') }} (999) 324 7922
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row gelion-thin ">
                            <div class="col-1">
                                <img src="{{ asset('/img/user/Mail.svg') }}" width="50">
                            </div>
                            <div class="col-11 pl-5 m-auto">
                                Email: contacto@myrewear.com
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="row gelion-thin">
                            <div class="col-12 gelion-regular pt-3">
                                Horario Laboral
                            </div>
                            <div class="col-1">
                                <img src="{{ asset('/img/user/Reloj.svg') }}" width="50">
                            </div>
                            <div class="col-11 pl-5 m-auto">
                                Lunes a viernes
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
    @push('js')
        <script src="{{ asset('/js/show.js') }}"></script>
    @endpush
@endsection
