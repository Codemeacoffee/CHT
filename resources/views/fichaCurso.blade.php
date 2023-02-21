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
        <p><?php echo $course['name']?></p>
        <p>Nivel <?php echo $course['level']?></p>
        <div class="detailBox">
            <div><i class="icon-iconos-01"></i><?php
                switch ($course['presencial']){
                    case 0:
                        echo 'Presencial';
                        break;
                    case 1:
                        echo 'Semipresencial';
                        break;
                    default:
                        echo 'Teleformación';
                } ?>
            </div>
            <div>
                <i class="icon-iconos-06"></i><?php echo $course['hours'] . 'h'
                ?>
            </div>
            <div><i class="icon-iconos-04"></i><?php $date = explode('-', $course['init_date']);
                if($course['display'] == 2){
                    echo'Próximamente';
                }else{
                    echo $date[2] . '/' . $date[1] . '/' . substr($date[0], 2, 4);
                }
                ?>
            </div>
            <div>
                <i class="icon-iconos-06"></i><?php echo $course['schedule']
                ?>
            </div>
        </div>
        <button onclick="preForm('<?php echo $course['id']?>', '{{URL::to('preRegistration')}}')">Preinscríbete</button>
        </div>
    <div class='imgCurso'>
        <a href=""><img src='<?php echo asset($img['img_link'])?>'></a>
        </div>
    </div>
    <div class="fichaDiv" id="presentacion">
        <h2>Presentación</h2>
        <p><?php echo $course['description']?></p>
    </div>
    <div class="fichaDiv" id="modulos">
        <h2>Módulos Formativos</h2>
        <p>A través de los siguientes módulos formativos, conseguiremos que el alumnado adquiera los competencias necesarias para convertirse en un profesional del sector elegido.</p>
        <ul>
            <?php
            foreach($modules as $module){
                echo '<li><b>' . $module['code'] . ': </b>' . $module['name'] . '<span class="horasModulo">' . $module['hours'] . 'h</span>';
                $unitForms = $units[$module['code']];
                if(sizeof($unitForms) > 0){
                    echo '<ul>';
                }
                foreach($unitForms as $unitForm){
                    echo '<li class="subMod" id="subMod1" onclick="displaySub()"><b>' . $unitForm['code'] . ': </b>' . $unitForm['name'] . '<span class="horasModulo">' . $unitForm['hours'] . 'h</span></li>';
                }
                if(sizeof($unitForms) > 0){
                    echo '</ul>';
                }
                echo '</li>';
            }
            ?>
        </ul>
    </div>
    <div class="fichaDiv" id="salidasProfesionales">
        <h2>Salidas profesionales</h2>
        <p>En un mercado en el que la duración de los contratos y las condiciones laborales son cada vez más inestables, en Centro de Hostelería y Turismo de Canarias centramos nuestros esfuerzos en que los profesionales que formamos obtengan titulaciones atractivas para el sector empresarial.
            <br><br>
            Esto se consigue estableciendo un vínculo cercano con multitud de empresas del sector, quienes nos ven como una fuente de profesionales cualificados confiables que a su vez ayuden a mejorar tanto el estándar de sus servicios, como la atención a su clientela y por consecuencia la calidad de su oferta.
            <br><br>
            Así pues, a continuación te exponemos la lista de ocupaciones o puestos de trabajo para los que estarás cualificado con este curso:
        </p>
        <div id="salidas">
            <?php
            $i = 0;
            foreach($departures as $departure){
                foreach($departure as $item){
                    echo '<li>'.$item['name'] . '</li>';
                }
               $i++;
            }?>
        </div>
    </div>
    <div class="fichaDiv" id="requisitosL">
        <h2>Requisitos</h2>
        <div id="requirements">
            <div id="tableHolder">
            <table>
                <?php
                    if($course['level'] == 1){
                echo '
                <tr id="desiredLevel">
                    <td></i>Nivel 1</td>
                    <td><div class="line"></div><p style="margin: 0">- No requiere ninguna titulación</p></td>
                </tr>';
                    } else {
                        echo '<tr>
                    <td>Nivel 1</td>
                    <td><div class="line"></div><p style="margin: 0">- No requiere ninguna titulación</p></td>
                </tr>';
                    }

                    if($course['level'] == 2){
                        echo '<tr id="desiredLevel">
                    <td>Nivel 2</td>
                    <td>
                        <div class="line"></div>
                        <ul>
                            <li><p>- Haber obtenido un certificado de Nivel 1 en la misma familia profesional.</p></li>
                            <li><p>- Graduado en ESO.</p></li>
                        </ul>
                    </td>
                </tr>';
                    } else {
                        echo '<tr>
                    <td>Nivel 2</td>
                    <td>
                        <div class="line"></div>
                        <ul>
                            <li><p>- Haber obtenido un certificado de Nivel 1 en la misma familia profesional.</p></li>
                            <li><p>- Graduado en ESO.</p></li>
                        </ul>
                    </td>
                </tr>';
                    }
                    if($course['level'] == 3){
                        echo '<tr id="desiredLevel">
                    <td>Nivel 3</td>
                    <td>
                        <div class="line"></div>
                        <ul>
                            <li><p>- Haber obtenido un certificado de Nivel 2 en la misma familia profesional.</p></li>
                            <li><p>- Bachillerato.</p></li>
                        </ul>
                    </td>
                </tr>';
                    } else {
                        echo '<tr>
                    <td>Nivel 3</td>
                    <td>
                        <div class="line"></div>
                        <ul>
                            <li><p>- Haber obtenido un certificado de Nivel 2 en la misma familia profesional.</p></li>
                            <li><p>- Bachillerato.</p></li>
                        </ul>
                    </td>
                </tr>';
                    }
                ?>
            </table>
            </div>
        </div>
    </div>
    <div id="cursos">
        <h2>Cursos relacionados</h2>
        <div id="mobileScroller">
            <div id="cursosCarousel">
            <?php
            $i = 0;
            $img = '';
            foreach($otherCourses as $courses){
                foreach($courses as $cours) {
                $img = asset(\CHT\Image::where('code', $cours['img_code'])->get()->first()['img_link']);
                $date = explode('-', $cours['init_date']);
                $shortDate = $date[2] . '/' . $date[1];
                echo '';
                echo '<div class="cursoEffect"><img src="' . $img . '"/>';
                echo '<a href="' . URL::to('curso/'. $cours['name'] . '?key='.$cours['id']).'"><div class="overBox"><p>'.$cours['name']. '<br> Nivel ' .$cours['level'] .'</p><div>';
                echo '<span><i class="icon-iconos-04"></i>' . $shortDate .'</span><span><i class="icon-iconos-06"></i>' . $cours['hours'] .'</span></div></div>';
                echo '<div class="countDownInfo"><div><p>' . $cours['description'] . '</p><a href="' . URL::to('curso/'. $cours['name']. '?key='.$cours['id']).'"><button>Ver más</button></a></a></div>
                    </div></div>';
                $i++;
                }
            }?>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/resizeText.js')}}"></script>
@stop
@section('footer')