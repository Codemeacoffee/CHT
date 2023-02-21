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
        <p>CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS, es una empresa de titularidad privada. A continuación se especifica los datos correspondientes: <br>

<br>CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS, S.L., constituida el 06 de febrero de 2014, ante el notario José Miguel Mara Burgos, en Las Palmas de G.C., con número de expediente 14019459  <br>

 

<br>Su sede fiscal y sus centros de formación e instalaciones se encuentran ubicadas en: <br>

Urb. Campo Internacional, P.33 S/N, 35290, San Bartolomé de Tirajana, Las Palmas.<br>

 

<br>Administrador único José Antonio Newport Perdomo.  <br>

 

<br>Organigrama<br>
<img class="w-100" src="{{asset('images/Organigrama.png')}}"><br>
<br>PERFIL Y TRAYECTORIA DE LOS RESPONSABLES DE LA ENTIDAD<br>

·         Perfil 1A - José Antonio Newport: Co-Presidente, co-funcador y socio mancomunado del Centro de Hostelería y Turismo de Maspalomas. <br>

·         Perfil 1B – Carlos Nobaüer Sánchez: Co-Presidente, co-funcador y socio mancomunado del Centro de Hostelería y Turismo de Maspalomas. <br>

·         Eva Inmaculada Ortiz Yánez: Coordinadora de formación del Centro de Hostelería y Turismo de Maspalomas.<br>

·         Eduardo Rodríguez Acosta: Jefe de Estudios del centro de formación de CHT (Centro de Hostelería y Turismo).<br>
<br><br><br></p>
    </div>
    <script type="text/javascript" src="{{asset('js/resizeText.js')}}"></script>
@stop
@section('footer')