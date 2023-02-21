@extends('registration')
@section('header')
@section('content')
    <div class="cajaInvisible" id="GC"></div>
    <div class="cursosBox">
        <h1>Cursos</h1>
        <div class="filterClass">
            <div onclick="userFilterCourses(1)" class="filterOptions selected2">Todos</div>
            <div onclick="userFilterCourses(2)" class="filterOptions">Desempleados</div>
            <div onclick="userFilterCourses(3)" class="filterOptions">Ocupados</div>
            <div onclick="userFilterCourses(4)" class="filterOptions">Privados</div>
            <button class="desktopIcon viewMode normalMode"><i class="glyphicon glyphicon-th-large"></i></button>
            <button class="desktopIcon viewMode listMode buttonSelected"><i class="glyphicon glyphicon-th-list"></i></button>
        </div>
        
        <div class="ml-5 mr-4 selectViewMode">
            <button class="viewMode listMode buttonSelected"><i class="glyphicon glyphicon-th-list"></i></button>
            <button class="viewMode normalMode"><i class="glyphicon glyphicon-th-large"></i></button>
        </div>
        
        <div class="cursosInner standartViewMode">
            <?php
            echo '<div id="spacer" class="blueBox" style="display:none"><p>En este momento no disponemos de este tipo de cursos. Puedes consultar nuestro catálogo completo <a class="blueBold" href="' . URL::to('cursos') . '">aquí.</a></p></div>';
                    $acu = 0;
            foreach($courses as $cours){
                foreach($images as $image){
                    if($cours['img_code'] === $image['code']){
                        $img = asset($image['img_link']);
                    }
                }
                    $date = explode('-', $cours['init_date']);
                    $shortDate = $date[2] . '/' . $date[1] . '/' . substr($date[0], 2, 4);
                    if($cours['display'] == 2) $shortDate = "Próximamente";
                    echo
                        '<div class="cursoEffect" data-content="'.$cours['type'].'-'.$cours['public'].'">
                            <img src="' . $img . '"/>
                            <div class="overBox">
                                <p>'.$cours['name']. '<br> Nivel ' .$cours['level'] .'</p>
                                <div>
                                    <span>
                                        <i class="icon-iconos-04"></i>' . $shortDate .'
                                    </span>
                                    <span>
                                        <i class="icon-iconos-06"></i>' . $cours['hours'] .'
                                    </span>
                                </div>
                            </div>
                            <div class="countDownInfo">
                            <div><p>' . $cours['description'] . '</p>
                            <a href="' . URL::to('curso/'. $cours['name']. '?key=' . $cours['id']).'">
                                <button>Ver más</button>
                            </a></div>
                        </div>
                    </div>';
                    $acu++;
            }?>
        </div>
        <div class="listViewMode w-100" style="margin: 4rem 0 0 0; overflow-x:auto;">
            <?php
            if(isset($courses) && sizeof($courses) == 0){
                echo '<div class="" style=""><p>En este momento no disponemos de este tipo de cursos. Puedes consultar nuestro catálogo completo <a class="blueBold" href="' . URL::to('cursos') . '">aquí.</a></p></div>';
            } else {
                echo'<table class="coursesTable">
                <tr class="tableHead">
                    <th>Nombre</th>
                    <th>Nivel</th>
                    <th>Fecha de inicio</th>
                    <th>Información Curso</th>
                </tr>';
                foreach ($courses as $course){
                    $date = explode('-', $course['init_date']);
                    $shortDate = $date[2] . '/' . $date[1] . '/' . substr($date[0], 2, 4);
                    echo'<tr class="editableRow" data-content="'.$course['type'].'-'.$course['public'].'">
                        <td>'.$course['name'].'</td><td>';
                    if($course['level'] == 0){
                        echo'–';
                    } else {
                        echo $course['level'];
                        echo'</td>';
                    }
                    if($course['display'] == "2"){
                        echo'<td>Próximamente</td>';
                    } else if($course['init_date'] != ""){
                        echo'<td>'.$shortDate.'</td>';
                    }
                    echo'<td><a href="' . URL::to('curso/'. $course['name']. '?key=' . $course['id']).'"><p class="text-center">Ver más</p><i class="glyphicon glyphicon-list-alt centerHorizontal" style="color: #15284c"></i></a></td>
                    </tr>';
                }
                echo'</table>';
            }
            ?>
        </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/course.js')}}"></script>
@stop
@section('footer')