@extends('registration')
@section('header')
@section('content')
    <script type="text/javascript" src="{{asset('js/preFormCreation.js')}}"></script>
    <?php
    if(session('message')){
        echo '<div id="floatingMessage">' . session('message') . '</div>';
    }
    ?>
    <div id="imgModif">
    <div id="fichaFrontier">
    <div id='descCurso'>
        <p>Comisionado de Transparencia</p>
    </div>
    <div class='imgCurso'>
        <img src="{{asset('images/Transparencia.jpg')}}">
    </div>
    </div>
    </div>
    <div class="fichaDiv" id="presentacion">
        <p>El Comisionado de Transparencia y Acceso a la Información Pública de Canarias es un órgano creado por la Ley de Transparencia de Canarias y dedicado al fomento, análisis, control y protección de la transparencia y del derecho de acceso a la información pública en el ámbito canario.<br> 

<br><a href="https://transparenciacanarias.org/">Acceso a la página principal del Comisionado de Transparencia.</a><br>

<br>En el caso de considerar que se ha vulnerado su derecho a la información o para cualquier sugerencia o reclamación, puede dirigirse al Comisionado de Transparencia, en el siguiente <a href="https://transparenciacanarias.org/como-reclamar/">enlace.</a><br><br><br></p>
    </div>
    <script type="text/javascript" src="{{asset('js/resizeText.js')}}"></script>
@stop
@section('footer')