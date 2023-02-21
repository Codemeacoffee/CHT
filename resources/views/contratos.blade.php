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
        <p>Contratos</p>
    </div>
    <div class='imgCurso'>
        <a href=""><img src="{{asset('images/Transparencia.jpg')}}"></a>
        </div>
    </div>
    <div class="fichaDiv" id="presentacion">
        <p>CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS S.L.<br><br>
Durante los años 2021 y 2022 no se han firmado Contratos con la Administración Pública.<br>

<br><br><br></p>
    </div>
    <script type="text/javascript" src="{{asset('js/resizeText.js')}}"></script>
@stop
@section('footer')