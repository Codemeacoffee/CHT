@extends('registration')
@section('header')
@section('content')
    <script type="text/javascript" src="{{asset('js/preFormCreation.js')}}"></script>
    <?php
    if(session('message')){
        echo '<div id="floatingMessage">' . session('message') . '</div>';
    }
    ?>
    <div id="fichaFrontier">
    <div id='descCurso'>
        <p>Económico Financiera</p>
    </div>
    <div class='imgCurso'>
        <a href=""><img src="{{asset('images/Transparencia.jpg')}}"></a>
        </div>
    </div>
    <div class="fichaDiv" id="presentacion">
        <p>
            En esta sección encontrarás toda la información Económico-Financiera de CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS S.L.<br><br>
 
            <br><br>CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS S.L.<br><br>
            
            <br><br>Cuentas Anuales 2018. <a href="{{asset('files/cuentas.pdf')}}">link</a><br>
            <br><br>Memoria PYMES 2018. <a href="{{asset('files/Memoria.pdf')}}">link</a><br><br><br><br><br>
        </p>
    </div>
    <script type="text/javascript" src="{{asset('js/resizeText.js')}}"></script>
@stop
@section('footer')