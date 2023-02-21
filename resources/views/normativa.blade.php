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
        <p>Normativa</p>
    </div>
    <div class='imgCurso'>
        <img src="{{asset('images/Transparencia.jpg')}}">
    </div>
    </div>
    </div>
    <div class="fichaDiv" id="presentacion">
        <p>CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS, en cumplimiento con la Normativa que regula el derecho de acceso a la información y para una gestión transparente, ponemos a disposición del ciudadano, de manera fácil y accesible, toda la información relativa a la organización, estructura, actividad, subvenciones recibidas, contratos y normativa a la que estamos sujetos. <br> 

 

<br>Normativa Relacionada:<br>

Ley 19/2013, de 09 de diciembre, de transparencia, acceso a la información pública y buen Gobierno. (Normativa Estatal) <a href="{{asset('files/Ley 19-2019, de 9 de diciembre, de transparencia, acceso a la información pública y buen gobierno (Normativa Estatal).pdf')}}">link</a> <br>

Ley 12/2014, de 26 de diciembre, de transparencia y de acceso a la información pública. (Normativa Autonómica). <a href="{{asset('files/Ley 12-2017, de 26 de diciembre, de transparencia y de acceso a la información pública (Normativa Autonómica).pdf')}}">link</a> <br>

Real Decreto Legislativo 1/2010, de 02 de julio por el que se aprueba el texto refundido de la Ley de Sociedades de Capital. <a href="{{asset('files/Real Decreto Legislativo 1-2010, de 2 de julio, por el que se aprueba el texto refundido de la Ley de Sociedades de Capital.pdf')}}">link</a> <br>

Ley 38-2003, de 17 de noviembre, General de Subvenciones. <a href="{{asset('files/Ley 38-2003, de 17 de noviembre, General de Subvenciones.pdf')}}">link</a> <br>

Orden 368-2019, de 28 de marzo, por la que se desarrolla el RD 694-2017, de 3 de Julio. <a href="{{asset('files/BOE-A-2019-4715.pdf')}}">link</a> <br>

Ley 2-1998, de 6 de abril, de Fundaciones Canarias. <a href="{{asset('files/Ley 2-1998, de 6 de abril, de Fundaciones Canarias.pdf')}}">link</a>  <br><br><br></p>
    </div>
    <script type="text/javascript" src="{{asset('js/resizeText.js')}}"></script>
@stop
@section('footer')