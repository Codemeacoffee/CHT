@extends('registration')
@section('header')
@section('content')
    <div id="cursoFrontier" class="salasBox">
    <div id='descCurso' style="height: 25rem;">
        <p>Alquiler de instalaciones</p>
        <p>El Centro de Hostelería y Turismo pone a disposición de sus clientes el uso mediante alquiler de todas sus instalaciones.</p>
        <button style="top: unset;" onclick="budgetForm('{{URL::to('solicitudInfo')}}')">Solicitar presupuesto</button>
        </div>
        <div class='imgCurso' id="aulasImg">
            <img src="{{asset('images/img_contacto_1.jpg')}}">
        </div>
    </div>
        <div id="aulas" class="middleBlock">
            <img src="{{asset('images/alquiler.jpg')}}" >
            <div>
            <p>
                Nos adaptamos completamente al tipo de evento (clase magistral, conferencia, espacio co-working...) que quiera organizar.
                No dudes en ponerte en contacto con nosotros para que podamos concretar de qué modo podemos poner nuestras excelentes instalaciones
                a tu servicio.
            </p>
            </div>
    </div>
    <div class="aboutUsWhoWeAre" id="aulaStuff">
        <h1>Servicios Incluidos</h1>
        <div id="mobileScroller">
            <div id="valores">
                <div class="aulaDiv" id="aulaDiv1"><img src="{{asset('images/ordenadores.jpg')}}"><p class="boxTitle">Salas <br>informatizadas</p></div>
                <div class="aulaDiv" id="aulaDiv2"><img src="{{asset('images/salasBlancas.jpg')}}"><p class="boxTitle">Salas <br>blancas teóricas</p></div>
                <div class="aulaDiv" id="aulaDiv3"><img src="{{asset('images/ServiciosFormadores-SalasInformatizadas.jpg')}}"><p class="boxTitle">Servicio de<br> formadores</p></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $($('#subImgCarousel').children()[$('#subImgCarousel').children().length - 1]).css('margin-right', '0');
        $($('#subImgCarousel').children()[0]).css('margin-left', '0');
    </script>
@stop
@section('footer')