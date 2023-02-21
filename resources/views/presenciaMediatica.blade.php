@extends('registration')
@section('header')
@section('content')
    <div id="otherNews">
        <h2>Noticias</h2>
        <div id="fullNoticias">
            <?php
            $i = 0;
            $j = 3;
            $z = 1;

            foreach ($news as $new){
                foreach ($images as $image){
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
                if($i > $j){
                    $j+= 4;
                    $z++;
                }
                echo '<a href="' . URL::to('noticias/' . $new['title']) . '"><div class="new part' . $z . '">';
                echo '<img class="leftNew" src="'.$img.'">';
                echo '<div class="rightNew">';
                echo '<h1>'.$new->title.'</h1>';
                echo '<p class="newContent">'.htmlspecialchars_decode($new->text).'</p>';
                echo '<span>Leer más</span>';
                //echo '<div class="floatingDate"><p>'.$splitDate[2].' '.$splitDate[1].'</p></div>';
                echo '</div>';
                echo '</div></a>';
                $i++;
            }
            echo '<div id="partsBox">';
            for($k = 1; $k <= $z; $k++){
                if($k === 1){
                    echo '<span class="selected elem' . $k . '" onclick="showNews(' . $k . ')">' . $k . '</span>';
                } else {
                    echo '<span class="elem' . $k . '" onclick="showNews(' . $k .  ')">' . $k . '</span>';
                }
            }
            echo '</div>';
            ?>

            <div id="mobileNewsView" class="inner-Wrapper">
                <?php
                foreach ($news as $new){
                    foreach ($images as $image){
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
                    echo '<a href="' . URL::to('noticias/' . $new['title']) . '">';
                    echo'<div class="new">';
                    echo'<img src="' . asset($img) . '">';
                    echo'<div class="leftNew" id="noticiasLeftNew">';
                    echo'<h1 id="leftNewH1">' . $splitDate[2] .'</h1>';
                    echo'<h2 id="leftNewH2">' . $splitDate[1] .'</h2>';
                    echo'</div>';
                    echo'<div class="rightNew">';
                    echo'<h1 id="rightNewH1">' . $new['title'] . '</h1>';
                    echo'<h2 id="rightNewH2">'.htmlspecialchars_decode($new['text']).'</h2>';
                    echo'</div>';
                    echo'</div></a>';
                    $count = 0;
                }?>
                </div>
        </div>

        <script type="text/javascript" src="{{asset('js/readMore.js')}}"></script>
    </div>
@stop
@section('footer')
