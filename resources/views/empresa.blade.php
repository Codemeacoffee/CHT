@extends('registration')
@section('header')
@section('content')

<div id="cursos" class="empresa">
    <h2>Garantía de calidad y compromiso con el medio ambiente</h2>
    <div  class="empresaGrid">
        <img src="{{asset('images/ISO2.jpg')}}" style="max-width:15%">
        <p>
            Conscientes de la importancia de mantener un desarrollo sostenible, y asumidos sus principios,
            los centros del Grupo Nformar desarrollan un <strong>Sistema de Gestión Integrado tanto de Calidad como Ambiental</strong>
            que intenta prevenir los impactos sobre el entorno de sus actividades e instalaciones,
            según los estándares <strong>ISO 14001:2015</strong> e <strong>ISO 9001:2015.</strong>
        </p>
    </div>
    <p>
        Los centros del Grupo Nformar quieren conseguir que sus procesos y procedimientos de formación originen un mínimo impacto medioambiental,
        para ello previenen, controlan y minimizan los efectos medioambientales que sus actividades generan en el entorno, estudian y perfeccionan
        constantemente nuevos métodos para reducir el consumo de materias primas, las energía requerida para elaborar sus productos y las emisiones
        a la atmósfera de gases contaminantes producidas por su actividad.
    </p>
    <br>
    <a href="{{asset('files/politica_de_calidad.pdf')}}" target="_blank">Política Ambiental y de Calidad</a>
</div>

<div id="cursos" class="empresa">
    <h2>Sensibilización ambiental</h2>
    <p>
        Con el fin de sensibilizar a los alumnos de nuestras academias con el buen uso de nuestras instalaciones, y con las normas básicas para un futuro
        más sostenible contaremos en breve con una nueva campaña de sensibilización ambiental a través nuestro nuevo blog, con noticias, videos y un largo etc...
    </p>
    <div class="empresaGrid centerGrid" style="align-items: center">
        <img src="{{asset('images/emaslogo.png')}}">
        <p>
            <strong>EMAS 2021</strong>
            <br>
            <a href="{{asset('files/Declaracion ambiental.pdf')}}" target="_blank">Declaracion ambiental grupo gestión empresarial europea</a>
        </p>
    </div>
</div>

<div id="cursos" class="empresa lastGrid">
    <h2>Manuales de buenas prácticas ambientales</h2>
   <p>
       El antiguo Ministerio de Trabajo y Asuntos Sociales, a través de la Unidad Administradora para el Fondo Social Europeo y el antiguo Instituto Nacional de Empleo, en colaboración con la Red de Autoridades Ambientales elaboraron estos Manuales de Buenas Prácticas Ambientales para las diferentes Familias Profesionales en que se organiza la Formación Ocupacional.
       Estos Manuales de Buenas Prácticas surgieron como complemento necesario al Módulo de Sensibilización Ambiental, dándole continuidad a una idea que, con carácter general y básico, integraban consideraciones ambientales transversales a los cursos de formación ocupacional.
       Las Buenas Prácticas que se exponen en estos Manuales son muy útiles y sencillas de aplicar, tanto por su simplicidad como por los sorprendentes resultados que se obtienen, contribuyendo de esta manera a conseguir, entre todos, un objetivo fundamental: el Desarrollo Sostenible.

       Pincha en el siguiente
       <a href="https://www.miteco.gob.es/es/calidad-y-evaluacion-ambiental/temas/red-de-autoridades-ambientales-raa-/sensibilizacion-medioambiental/manuales-de-buenas-practicas/" target="_blank">enlace</a>,
       donde podrás encontrar el manual de buenas prácticas asociado a la especialidad formativa que estás realizando.
   </p>
</div>


@stop
@section('footer')