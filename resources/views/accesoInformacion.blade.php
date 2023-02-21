@extends('registration')
@section('header')
@section('content')
    <script type="text/javascript" src="{{asset('js/preFormCreation.js')}}"></script>
    <?php
    if(session('message')){
        echo '<div id="floatingMessage">' . session('message') . '</div>';
    }
    ?><div id="imgModif">
    <div id="fichaFrontier">
    <div id='descCurso'>
        <p>Acceso a la información</p>
    </div>
    <div class='imgCurso'>
        <img src="{{asset('images/Transparencia.jpg')}}">
    </div>
    </div>
    </div>
    <div class="fichaDiv" id="presentacion">
        <p>La Entidad mantendrá en la medida de lo posible la información actualizada, no obstante, cualquier persona podrá solicitar documentación adicional, tal como se indica en la normativa. La persona interesada en obtener más información deberá contactar por los siguientes medios:<br> 

<br>1.- Por correo electrónico a la siguiente dirección: info@chtcanarias.com <br>

2.- Por medio de la web en el buzón de sugerencia y recomendaciones. <br>

3.- De forma presencial o a través de correo postal, en nuestra sede central ubicada en Urb. Campo Internacional, P.33 S/N, 35290, San Bartolomé de Tirajana, Las Palmas.<br>

<br>En cualquiera de los casos anteriores, para poder tramitar correctamente su solicitud, se deberá cumplimentar los siguientes requisitos, tal como establece el art.41 de la Ley 12/2014: <br>

·         Identidad de la persona solicitante, adjuntando copia de su DNI/NIE. <br>

·         La Información que solicita. <br>

·         La dirección de contacto, preferentemente electrónica a efectos de comunicaciones.<br><br><br></p>
    </div>
    <script type="text/javascript" src="{{asset('js/resizeText.js')}}"></script>
@stop
@section('footer')