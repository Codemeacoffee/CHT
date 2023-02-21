@extends('registration')
@section('header')
@section('content')
    <?php
        if(session('message')){
            echo '<div id="floatingMessage">' . session('message') . '</div>';
        }
    ?>
    
    <!--Pop up-->
    <!--<div class="modal fade" id="projectsModal" tabindex="-1" role="dialog" aria-hidden="true" >-->
    <!--    <div class="modal-dialog modal-lg" role="document">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header w-100">-->
    <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--                    <span style="float:right; font-size: 30px;" aria-hidden="true">&times;</span>-->
    <!--                </button>-->
    <!--            </div>-->
    <!--            <div class="modal-body p-0">-->
    <!--              <img class="w-100" src="{{asset('images/recogidadejuguetes_nformar.png')}}">-->
    <!--            </div>-->
                
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
        
    <script type="text/javascript">
        // $(window).on('load', function () {
        //   $('#projectsModal').modal('toggle');
        // });
    </script>
    
    <!--Pop up-->

    <div id="cursoFrontier"></div>
    <div id="oxfordTestCard">
        <a data-ed="{{url('oxfordTestOfEnglish')}}" href="{{url('oxfordTestOfEnglish')}}">
            <div class="card">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                              <img class="mt-4 pt-2" src="{{asset('images/oxfordCertificate.svg')}}">
                        </div>
                         <div class="col-6">
                             <h4 class="mt-4 pt-3"><b>Oxford Test <br> of English</b></h4>
                         </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div id="cursos">
        <h2>Próximos cursos</h2>
        <div id="mobileScroller">
            <div id="cursosCarousel">
            <?php
                $i = 0;
                $img = '';
                foreach($courses as $cours){
                    foreach($images as $image){
                        if($cours['img_code'] === $image['code']){
                            $img = asset($image['img_link']);
                        }
                    }

                    $date = explode('-', $cours['init_date']);
                    $shortDate = $date[2] . '/' . $date[1] . '/' . substr($date[0], 2, 4);
                    $url = URL::to('curso/'. $cours['name']. '?key=' . $cours['id']);
                    echo '<div class="cursoEffect"><img src="' . $img . '"/>';
                    echo '<div class="overBox"><p>'.$cours['name']. '</p><p> Nivel ' .$cours['level'] .'</p><div>';

                    if($cours->display ==2){
                        echo '<span><i class="icon-iconos-04"></i>Próximamente</span><span><i class="icon-iconos-06"></i>' . $cours['hours'] .'</span></div>';
                    }else{
                        echo '<span><i class="icon-iconos-04"></i>' . $shortDate .'</span><span><i class="icon-iconos-06"></i>' . $cours['hours'] .'</span></div>';
                    }
                    echo '</div><div class="countDownInfo"><div><p>' . $cours['description'] . '</p><a href="' . URL::to('curso/'. $cours['name']. '?key=' . $cours['id'])
                        .'"><button>Ver más</button></a></div></div></a></div>';
                    $i++;
                }

                if($i % 3 !== 0){
                    for($j = $i; $j <= $i + 3; $j++){
                        if($i % 3 === 0){ break; } else {
                            echo '<div class="cursoEffect invisibleBox"></div>';
                        }
                        $i++;
                    }
                }
            ?>
            </div>
        </div>
    </div>
    <div id="noticias">
        <h2>Ultimas Noticias</h2>
            <div class="inner-Wrapper">
                <?php
                foreach ($news as $new){
                    foreach ($images as $image){
                        if($new['img_code'] === $image['code']){
                            $img = $image['img_link']; break;
                        }
                    }

                    $splitDate = explode('-', $new['date']);
                    switch ($splitDate[1]){
                        case 1: $splitDate[1] = 'ENE'; break;
                        case 2: $splitDate[1] = 'FEB'; break;
                        case 3: $splitDate[1] = 'MAR'; break;
                        case 4: $splitDate[1] = 'ABR'; break;
                        case 5: $splitDate[1] = 'MAY'; break;
                        case 6: $splitDate[1] = 'JUN'; break;
                        case 7: $splitDate[1] = 'JUL'; break;
                        case 8: $splitDate[1] = 'AGO'; break;
                        case 9: $splitDate[1] = 'SEP'; break;
                        case 10: $splitDate[1] = 'OCT'; break;
                        case 11: $splitDate[1] = 'NOV'; break;
                        case 12: $splitDate[1] = 'DIC'; break;
                    }

                    /*
                        <h1>' . $splitDate[2] .'</h1>
                        <h2>' . $splitDate[1] .'</h2>
                    */
                    echo '
                        <a href="' . URL::to('noticias/' . $new['title']) . '">
                        <div class="new">
                            <img src="' . asset($img) . '">
                            <div class="leftNew">
                                <h1></h1>
                                <h2></h2>
                            </div>
                            <div class="rightNew">
                                <h1>' . $new['title'] . '</h1>
                                <div class="readMore">
                                    <h2>'.strip_tags(htmlspecialchars_decode($new['text'])).'</h2><h2>...</h2>
                                    <b><h2>Leer más</h2></b>
                                </div>
                            </div>
                            </div></a>';}?>
                <div class="seeMoreButton"><a href="{{url('noticias')}}"><button>Ver Más</button></a></div>
                <?php
                    $count = 0;
                ?>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/readMore.js')}}"></script>
    <script type="text/javascript">
        <?php
            echo 'let categorias = new Array();
            let i = 0;';
            foreach ($frontierContent as $item) {
                echo 'categorias[i] = [' . $item[0] . ',"' . $item[1] . '"];
                i++;';
            }
            echo 'let images = ' .$images. ';';
        ?>
        let acu = 0;
        function carouselFrontier(){
            if(acu === categorias.length){
                acu = 0;
            }
            let img;
            for(let i = 0; i < images.length; i++){
                if(images[i]['code'] === categorias[acu][0]['img_code']){
                    img = images[i]['img_link'];
                    break;
                }
            }
            <?php
            echo 'if(categorias[acu][1] === "course"){
                let action = \''. URL::to('preRegistration').'\';
                let course = \''. URL::to('curso/\''. ' + categorias[acu][0][\'name\'] + "?key=" + categorias[acu][0][\'id\']').';
                if(categorias[acu][0][\'name\'].length > 30){
                 $(\'#cursoFrontier\').html(
                    "<div id=\'descCurso\'>" +
                    "<p id=\'smallText\' class=\'mobileTextFade\'>" + categorias[acu][0][\'name\'] + "</p>" +
                    "<p class=\'mobileTextFade\'>Nivel " + categorias[acu][0][\'level\'] + "</p>" +
                    "<button onclick=\"preForm(\'" + categorias[acu][0][\'id\'] + "\' , \'" + action + "\')\">Preinscríbete</button>" +
                    "</div>" +
                    "<div class=\'imgCurso\'>" +
                    "<a href=\"" + course + "\"><img src=\'" + img + "\'></a>" +
                    "</div>");
                }else{
                $(\'#cursoFrontier\').html(
                    "<div id=\'descCurso\'>" +
                    "<p class=\'mobileTextFade\'>" + categorias[acu][0][\'name\'] + "</p>" +
                    "<p class=\'mobileTextFade\'>Nivel " + categorias[acu][0][\'level\'] + "</p>" +
                    "<button onclick=\"preForm(\'" + categorias[acu][0][\'id\'] + "\' , \'" + action + "\')\">Preinscríbete</button>" +
                    "</div>" +
                    "<div class=\'imgCurso\'>" +
                    "<a href=\"" + course + "\"><img src=\'" + img + "\'></a>" +
                    "</div>");
                    }
            } else {
                let shortDate = categorias[acu][0][\'date\'].split("-")[2] + "/" + categorias[acu][0][\'date\'].split("-")[1] + "/" + categorias[acu][0][\'date\'].split("-")[0].substring(2,4);
                let action = "noticias/" + categorias[acu][0][\'title\'];
                if(categorias[acu][0][\'title\'].length > 30){
                $(\'#cursoFrontier\').html(
                    "<div id=\'descCurso\'>" +
                    "<p class=\'mobileTextFade\' id=\'smallText\'>" + categorias[acu][0][\'title\'] + "</p>" +
                    "<p class=\'mobileTextFade\'>" + shortDate + "</p>" +
                    "<a href=\"" + action + "\"><button>Ver más</button></a>" +
                    "</div>" +
                    "<div class=\'imgCurso\'>" +
                    "<a href=\"" + action + "\"><img src=\'" + img + "\'></a>" +
                    "</div>");
                }else{
                $(\'#cursoFrontier\').html(
                    "<div id=\'descCurso\'>" +
                    "<p class=\'mobileTextFade\'>" + categorias[acu][0][\'title\'] + "</p>" +
                    "<p class=\'mobileTextFade\'>" + shortDate + "</p>" +
                    "<a href=\"" + action + "\"><button>Ver más></button></a>" +
                    "</div>" +
                    "<div class=\'imgCurso\'>" +
                    "<a href=\"" + action + "\"><img src=\'" + img + "\'></a>" +
                    "</div>");
                    }
                }';?>
            acu++;
            if(screen.width<1284 ){
                $('.mobileTextFade').fadeIn(1000);
                setTimeout(carouselFrontier, 8000);
                setTimeout(function () {
                    $('.mobileTextFade').fadeOut(1000);
                }, 7000);
            }else{
                $('#descCurso').addClass('magictime swashIn');
                setTimeout(carouselFrontier, 8000);
                setTimeout(function () {
                    $('#descCurso').addClass('magictime swashOut');
                }, 7000);
            }
          resizeFrontier();
        }
        carouselFrontier();
    </script>
@stop
@section('footer')