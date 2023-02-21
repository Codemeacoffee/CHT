@extends('registration')
@section('header')
@section('content')
    <div id="equipo">
        <div id="formBox">
            <div class="halfBox">
                <div class="teamForm">
                <h1>Únete al equipo</h1>
                <form action="{{URL::to('equipo')}}" method="post" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div>
                        <input autocomplete="off" type="text" name="fullName" maxlength="50" placeholder="Nombre y apellidos" required>
                    </div>
                    <div>
                        <input autocomplete="off" type="text" name="email" onkeyup="validateEmail2($(this).val(), $(this))" maxlength="100" placeholder="Correo electrónico" required>
                        <span class="toolTip">ejemplo@ejemplo.ej</span><span class="toolTip">Ya te has inscrito!</span>
                    </div>
                    <div>
                        <input autocomplete="off" type="tel" name="tlf" maxlength="9" required placeholder="Teléfono">
                    </div>
                    <div>
                        <input autocomplete="off" type="text" name="position" maxlength="100" placeholder="Puesto al que aspiras" required>
                    </div>
                    <div>
                        <input autocomplete="off" type="file" name="cv" accept=".pdf, .docx" onchange="checkCV()" required>
                        <label for="cv" onclick="$('input[type=file]').click()">Subir CV</label>
                        <span>Ningún archivo</span>
                    </div>
                        <input type="submit" value="Enviar">
                </form>
                </div>
            </div>
            <img src="{{asset('images/equipo.jpg')}}">
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/preFormCreation.js')}}"></script>
@stop
@section('footer')