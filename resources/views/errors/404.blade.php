<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <title>404 - Página no encontrada</title>
    <meta name="author" content="INVERSIONES BORMA S.L.">
    <meta name="keywords" content="CHT, centro de hostelería y turismo de canarias, centro hostelería, centro hosteleria canarias,
        formacion gratuita, formacion gratis, formacion desempleados gratis, formacion trabajadores gratis, escuela, hostelería, centro,
        formación, desempleados, trabajadores, gratuita, gratuito, cocina, cafetería, bar, restaurante, cursos, educación, enseñanza, estudios,
        aprendizaje, gratis, formación bonificada, cursos sepe, cursos desempleados, sepe, cursos fundae, fundae, servicio canario empleo,
        cursos servicio canario empleo, cursos hostelería, cursos restaurante, cursos cafetería, certificado calidad, calidad,
        certificado profesionalidad, compromiso contratación, agencia colocación, bolsa trabajo, gran canaria, canaria">
    <meta name="description" content="El centro de hostelería y turismo de Canarias tiene como misión ser referente en cuanto a la formación en
        el área de la hostelería e industrias alimentarias, atendiendo las necesidades del sector y teniendo como referencia nuestro proyecto educativo.">
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#15284c"/>
    <meta name="msapplication-navbutton-color" content="#15284c"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#15284c"/>
    <meta name="csrf_token" content="{{csrf_token()}}"/>
    <meta name="csrf_token2" content="{{csrf_token()}}"/>
    <link rel="shortcut icon" type="image/png" href= "{{asset('images/favicon-01.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/equipo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/news.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/secondary.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/CHT_Fonts/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/404.css')}}">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        let index = "{{URL::to('/')}}";
        let contacto = "{{URL::to('contacto')}}";
        let elg = "{{URL::to('elegirnos')}}";
        let cursoPrivado = "{{URL::to('cursos/privado')}}";
        let cursoDes = "{{URL::to('cursos/desempleados')}}";
        let cursoT = "{{URL::to('cursos/trabajadores')}}";
        let cursoLink1 = "{{URL::to('cursos')}}";
        let cursoLink2 = "{{URL::to('cursos#GC')}}";
        let cursoLink3 = "{{URL::to('cursos#FTV')}}";
        let cursoLink4 = "{{URL::to('cursos/empresas')}}";
        let linkAl = "{{URL::to('alquilerAulas')}}";
        let linkC = "{{URL::to('conocenos')}}";
        let linkE = "{{URL::to('centros')}}";
        let linkN = "{{URL::to('noticias')}}";
        let linkU = "{{URL::to('equipo')}}";
        let preRegis = "{{URL::to('preRegistration')}}";
    </script>
    <script type="text/javascript" src="{{asset('js/cookies.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dropDownMenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scrollTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/preFormCreation.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/footerCreation.js')}}"></script>
</head>
<body>
<header>
    <div id="outerNavBar">
        <div>
            <a href="{{URL::to('/')}}"><img src="{{asset('images/CHT-logo.svg')}}"/></a>
            <div id="innerHeader">
                <p><a href="https://web.whatsapp.com/send?phone=34669383035&text=Hola" target="_blank"><b>Infórmate en</b> 669383035<i class="icon-whatsapp"></i></a><a target="_blank" href="https://www.facebook.com/chtcanarias"><i class="icon-facebook"></i></a>
                    <a target="_blank" href="https://www.instagram.com/chtcanarias/"><i class="icon-instagram"></i></a></p>
            </div>
            <div id="certifyBar">
                <div><img src="{{asset('images/calidad-logos.jpg')}}"/></div>
            </div>
        </div>
        <div class="wrapper">
            <div id="navBar"></div>

            <div class="spanAula">
                <span>Aula virtual</span>
            </div>
        </div>
    </div>
</header>
<div id="shortCutArrow" onclick="scrollCero()"><i class="icon-iconos-19"></i></div>

  <div class="container404">
      <img class="image404" src="{{asset('images/404-01.png')}}"/>
  </div>

   <div class="containerUpps">
        <span class="textLeft404">Upps!</span>
        <span class="textRight404">La página solicitada no se ha encontrado,<br> pero no te desanimes.</span>
    </div>

    <div id="cursos">
        <h2>Te puede interesar:</h2>
        <div id="cursosCarousel">
           <?php
            $i = 0;
            $img = '';
            foreach($courses as $cours){
                $date = explode('-', $cours['init_date']);
                $shortDate = $date[2] . '/' . $date[1] . '/' . substr($date[0], 2, 4);
                $url = URL::to('curso/'. $cours['name'].'?key='.$cours['id']);
                echo '<div class="cursoEffect">';
                foreach($images as $image){
                    if($cours['img_code'] === $image['code']){
                        $img = asset($image['img_link']);
                    }
                }
                echo '<img src="'.$img.'">';
                echo '<div class="overBox"><p>'.$cours['name']. '</p><p> Nivel ' .$cours['level'] .'</p></div>';
                echo '<div class="countDownInfo"><div><h1>' . $cours['name'] .'</h1><a href="' . URL::to('curso/'. $cours['name'].'?key='.$cours['id']).'"><button>Ver más</button></a></div></div></div>';
                $i++;
            }

            if($i % 3 !== 0){
                for($j = $i; $j <= $i + 3; $j++){
                    if($i % 3 === 0){
                        break;
                    } else {
                        echo '<div class="cursoEffect invisibleBox"></div>';
                    }
                    $i++;
                }}
?>      <div class="transparentBox"></div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/navBarCreation.js')}}"></script>
</body>
</html>
