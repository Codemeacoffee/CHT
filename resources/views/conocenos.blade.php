@extends('registration')
@section('header')
@section('content')
    <div class="aboutUsWhoWeAre" id="somos">
        <div class="containerElement">
            <div class="blueBox">
                <h1>¿Quiénes Somos?</h1>
                <p>Situado en pleno corazón de la urbanización Campo Internacional de Maspalomas, epicentro turístico de la Isla de Gran Canaria,
                    el Centro de formación de Hostelería y Turismo abre sus puertas el 7 de mayo de 2014 con el objetivo de formar profesionales que pasarán a formar parte
                    de las plantillas de hoteles, restaurantes y otros establecimientos de nuestra principal industria.
                </p>
            </div>
            <img src="{{asset('images/img_quienesSomos_1.jpg')}}">
        </div>
    </div>

    <div class="aboutUsWhoWeAre" id="mision">
        <div id="oddContainer" class="containerElement2">
            <div class="blueBox">
                <h1>Misión</h1>
                <p>
                    Mejorar la formación, cualificación y la empleabilidad de las personas a través de la formación, orientación, colocación y
                    asesoramiento a empresas.
                </p>
            </div>
            <img src="{{asset('images/conocenos1.jpg')}}">
        </div>
    </div>

    <div class="aboutUsWhoWeAre" id="vision">
        <div class="containerElement2">
            <img src="{{asset('images/ServiciosFormadores-SalasInformatizadas.jpg')}}">
            <div class="blueBox">
                <h1>Visión</h1>
                <p>
                    Seguir siendo un referente en el sector de la formación, tanto en la Formación Profesional para el Empleo como en la
                    formación privada, ofreciendo un servicio de calidad, así como seguir siendo pioneros en la inserción de personas en los
                    diversos sectores productivos de ámbito regional.
                </p>
            </div>
        </div>
    </div>

    <div class="contentValores">
        <div class="aboutUsWhoWeAre">
            <div id="mobileScroller" style="margin-bottom: 1rem">
                <div id="valores">
                    <div>
                        <img style="object-position: 0 0" src="{{asset('images/desarrollo.jpg')}}">
                        <p class="boxTitle">Confianza</p>
                        <p class="hiddenText">Basamos las relaciones con nuestros clientes en la confianza.</p>
                    </div>
                    <div>
                        <img style="object-position: -200px 0" src="{{asset('images/sinergia.jpg')}}">
                        <p class="boxTitle">Compromiso</p>
                        <p class="hiddenText">Nuestra propuesta consiste en dar lo mejor en todos los proyectos que se emprendan.</p>
                    </div>
                    <div>
                        <img src="{{asset('images/respetoSlider.jpeg')}}">
                        <p class="boxTitle">Respeto</p>
                        <p class="hiddenText">Salvaguardamos cada punto de contacto con el público, clientes y proveedores.</p>
                    </div>
                </div>
            </div>
            <div id="mobileScroller">
                <div id="valores">
                    <div>
                        <img style="object-position: 0 0" src="{{asset('images/liderazgoSlider.jpeg')}}">
                        <p class="boxTitle">Liderazgo y mejora continua</p>
                        <p class="hiddenText">Compromiso con el desarrollo de las personas y su motivación intentando llevar a cabo las mejores prácticas en todos los ámbitos en que se desarrolla la organización.</p>
                    </div>
                    <div >
                        <img style="object-position: -200px 0" src="{{asset('images/calidadSlider.jpeg')}}">
                        <p class="boxTitle">Calidad</p>
                        <p class="hiddenText">Capacidad de captar y satisfacer las expectativas del cliente, mediante accesibilidad y atención personalizada.</p>
                    </div>
                    <div>
                        <img src="{{asset('images/exelencia.jpg')}}">
                        <p class="boxTitle">Exigencia</p>
                        <p class="hiddenText">El camino a la excelencia empieza por nosotros mismos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')