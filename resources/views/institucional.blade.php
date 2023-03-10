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
        <p>Institucional</p>
    </div>
    <div class='imgCurso'>
        <img src="{{asset('images/Transparencia.jpg')}}">
    </div>
    </div>
    </div>
    <div class="fichaDiv" id="presentacion">
        <p>CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS está integrada por 1 SEDES dedicadas al desarrollo, impartición y comercialización de una amplia oferta en enseñanza de Formación Profesional para el Empleo de carácter privado, que tiene su ámbito de actuación en la Comunidad Canaria, concretamente en la isla de: Gran Canaria.<br>

CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS siempre ha proporcionado una formación de calidad, ajustada a las diferentes demandas del mercado, lo que define su capacidad de adaptación y versatilidad a la hora de mantenerse a la vanguardia, permitiéndose así ser una de las mayores empresas educativas de la Comunidad Autónoma de Canarias. Esta actualización continua en concordancia con el entorno ha sido posible desarrollando planes formativos acordes a las necesidades predominantes, tanto en la formación profesional inicial para personas desempleadas, como en la formación ocupacional, en modalidad presencial, a distancia y on-line.   <br>

Dichos programas formativos han sido impartidos a diferentes instituciones y organismos (públicos y privados), ya sea por la vía de convenios, como de contratos, adjudicaciones, etc. Esto supone un cúmulo de cambios estratégicos y operativos constantes, debido al entorno económico de estas vías de financiación, basadas en la contratación vía subvención, lo que supone que, por un lado, no exista un carácter continuado ni permanente, y por otro, se sufra de constantes modificaciones de financiación que no permiten una programación y desarrollo continuado de nuestras actuaciones estratégicas.   <br>

 

<br>Misión  <br>

CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS, está basada en aumentar las posibilidades de inserción y/o promoción profesional de nuestro alumnado, con una formación integral innovadora, dinámica, diversificada, de calidad, para así conseguir la mejora, el perfeccionamiento, la recalificación de su cualificación profesional, mediante la puesta al día de sus competencias y aumentando su calidad de vida.  <br>

 

<br>Objetivos  <br>

Satisfacer las acciones y medidas de aprendizaje, formación, recualificación o reciclaje profesional, dentro de las modalidades de cualificación profesional y tipologías existentes, tendentes a la mejora de la empleabilidad, la obtención de la cualificación necesaria para la obtención de empleo, así como impulsar y extender entre las empresas, entidades y los trabajadores ocupados, desempleados y privados, una formación que responda a sus necesidades.   <br>

 

<br>Servicios Actuales y Futuros  <br>

CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS, con el deseo de adaptación a los cambios que experimenta nuestra sociedad actual, orientada en los últimos años hacia una formación multidisciplinar, con el objetivo de aportar no sólo los conocimientos y capacidades propias de la acción formativa impartida, sino potenciar la transferencia de esas competencias aprendidas y consolidadas a otros sectores laborales, a través de unos criterios pedagógicos y una programación educativa multiplicable, abierta y actualizada.   <br>

Es por ello, que esta entidad además de ofertar una amplia gama de cursos, cuyos contenidos se ajustan a las demandas formativas del mercado actual, fomenta en cada acción valores que faciliten al cliente unas actitudes potenciadoras de su mejora laboral (liderazgo, compromiso, proactividad, resolución, etc.). Un ejemplo reciente de esta labor es el desarrollo de acciones formativas, con compromiso de contratación, dirigidas a ofrecer una formación ajustada a las necesidades del mercado de trabajo en nuevos yacimientos de empleo, y sectores económicos.  <br>

 

<br>Servicios Actuales  <br>

Familias Profesionales<br>

 

<br>Hostelería y Turismo<br>

Industrias Alimentarias<br>

Idiomas<br>


 

<br>Consulta nuestro catálogo de cursos <a href="{{URL::to('cursos')}}">aquí</a><br>

 

<br>Valores <br>

Con la finalidad de alcanzar los objetivos y competencias profesionales, el equipo humano que compone CENTRO DE HOSTELERÍA Y TURISMO DE CANARIAS, desarrolla y se implica en los siguientes valores de comportamiento:<br>

-Excelencia: Búsqueda continua de la calidad en todos los servicios prestados  <br>

-Adaptabilidad: Capacitación continua del personal a nuevos retos.  <br>

-Cooperación: Potenciación del trabajo en equipo y el respeto mutuo  <br>

-Superación: Valoración de la actividad bajo objetivos y resultados.  <br>

-Creatividad: Desarrollo de ideas y actuaciones innovadoras.  <br>

-Sostenibilidad: Satisfacción de las necesidades actuales sin comprometer los recursos futuros.  <br>

-Conciliación: Aplicación de sistemas y herramientas que propicien una mejora en las relaciones con los grupos de interés: Planes de igualdad, Responsabilidad social, Clima laboral <br> 

-Profesionalidad: Prestación de servicios con compromiso, transparencia y seriedad.<br><br><br></p>
    </div>
    <script type="text/javascript" src="{{asset('js/resizeText.js')}}"></script>
@stop
@section('footer')