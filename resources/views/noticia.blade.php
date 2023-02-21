@extends('registration')
@section('header')
@section('content')
    <div id="cursoFrontier">
        <div id='descCurso' class="descNew">
            <p id="newTitle"><?php echo $new['title']?></p>
            <p class="newsDate"><?php

                $splitDate = explode('-', $new['date']);
                foreach ($images as $image){
                    if($new['img_code'] === $image['code']){
                        $img = $image;
                        break;
                    }
                }
                switch ($splitDate[1]){
                    case 1:
                        $splitDate[1] = 'ENE';
                        break;
                    case 2:
                        $splitDate[1] = 'FEB';
                        break;
                    case 3:
                        $splitDate[1] = 'MAR';
                        break;
                    case 4:
                        $splitDate[1] = 'ABR';
                        break;
                    case 5:
                        $splitDate[1] = 'MAY';
                        break;
                    case 6:
                        $splitDate[1] = 'JUN';
                        break;
                    case 7:
                        $splitDate[1] = 'JUL';
                        break;
                    case 8:
                        $splitDate[1] = 'AGO';
                        break;
                    case 9:
                        $splitDate[1] = 'SEP';
                        break;
                    case 10:
                        $splitDate[1] = 'OCT';
                        break;
                    case 11:
                        $splitDate[1] = 'NOV';
                        break;
                    case 12:
                        $splitDate[1] = 'DIC';
                        break;
                }
                // echo $splitDate[2] . ' ' . $splitDate[1]
                ?>
                </p>
            </div>
            <div class='imgCurso' id="aulasImg">
            <img id="newHeadImage" src="<?php echo asset($img['img_link'])?>" onclick="generateImg(routes, 1)">
            </div>
    </div>
    <div id="noticia" class="fichaDiv">
            <div id="sectoresNoticia">
            <div>
            <?php
                if(isset($images[1])){
                    $routes = array();
                    $j = 0;
                    echo '<script type="text/javascript">let routes = new Array();let h = 0;';
                    foreach($images as $img){
                        echo 'routes[h] = [\'' . asset($img['img_link']) . '\',' . $img['video'] . ']; h++;';
                        $j++;
                    }
                    echo '</script>';
                    echo '<img src="' . asset($images[1]['img_link']) . '" onclick="generateImg(routes, 2)">';
                    echo '<div id="subImgCarousel">';
                }
                ?>
            </div>
            </div>
                <div>
                    <?php
                    $text = preg_split('/[\r\n]/', htmlspecialchars_decode($new['text']));
                    $fullText = '';
                    foreach($text as $part){
                        $fullText .= '<p>' . $part . '</p>';
                    }
                    echo $fullText?>
                </div>
            </div>
        </div>
    </div>
    <div id="noticias">
        <h2 style="margin-top: 6rem">Noticias relacionadas</h2>
        <div class="inner-Wrapper">
            <?php
            $count = 0;
            foreach ($otherNews as $new){
                foreach ($otherImages as $image){
                    if($new['img_code'] === $image['code']){
                        $img = $image['img_link'];
                        break;
                    }
                }
                $splitDate = explode('-', $new['date']);
                switch ($splitDate[1]){
                    case 1:
                        $splitDate[1] = 'ENE';
                        break;
                    case 2:
                        $splitDate[1] = 'FEB';
                        break;
                    case 3:
                        $splitDate[1] = 'MAR';
                        break;
                    case 4:
                        $splitDate[1] = 'ABR';
                        break;
                    case 5:
                        $splitDate[1] = 'MAY';
                        break;
                    case 6:
                        $splitDate[1] = 'JUN';
                        break;
                    case 7:
                        $splitDate[1] = 'JUL';
                        break;
                    case 8:
                        $splitDate[1] = 'AGO';
                        break;
                    case 9:
                        $splitDate[1] = 'SEP';
                        break;
                    case 10:
                        $splitDate[1] = 'OCT';
                        break;
                    case 11:
                        $splitDate[1] = 'NOV';
                        break;
                    case 12:
                        $splitDate[1] = 'DIC';
                        break;
                }
                    echo '<a href="' . URL::to('noticias/' . $new['title']) . '"><div class="new">';
                    /*<h1>' . $splitDate[2] .'</h1>
                        <h2>' . $splitDate[1] .'</h2>*/
                echo '
                    <img src="' . asset($img) . '">
                    <div class="leftNew">
                        <h1></h1>
                        <h2></h2>
                    </div>
                    <div class="rightNew">
                        <h1>' . $new['title'] . '</h1>
                        <div class="readMore">
                            <h2>'.htmlspecialchars_decode($new['text']).'</h2><h2>...</h2>
                            <b><h2>Leer más</h2></b>
                        </div>
                    </div>
                </div></a>';
                $count++;
            }
            ?>
        </div>
        <div class="seeMoreButton"><a href="{{url('noticias')}}"><button>Ver Más</button></a></div>
    </div>
    <script type="text/javascript" src="{{asset('js/readMore.js')}}"></script>
    <script type="text/javascript">
        $($('#subImgCarousel').children()[$('#subImgCarousel').children().length - 1]).css('margin-right', '0');
        $($('#subImgCarousel').children()[0]).css('margin-left', '0');
    </script>
@stop
@section('footer')