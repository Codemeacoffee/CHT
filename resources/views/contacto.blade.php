@extends('registration')
@section('header')
@section('content')
    <?php
            $num = 0;
            foreach($contacts as $contact){
                $aux = str_replace(' ', '+', $contact->location);
                $gMapLocation = 'https://maps.google.com/maps?q='.$aux.'&t=&z=13&ie=UTF8&iwloc=&output=embed';
                echo'<div class="contacto">';
                echo'<div class="innerContact">';
                echo'<div class="contactHalf">';
                echo'<p>Contacto</p>';
                echo'<span><i class="icon-iconos-02"></i>'.$contact->telephone.'</span>';
                echo'<span><i class="icon-iconos-03"></i>'.$contact->email.'</span>';
                echo'<span><i class="icon-iconos-01"></i>'.$contact->location.'</span>';
                echo'</div>';
                echo'<div class="contactHalf">';
                echo'<p>Horario</p>';
                echo'<span><i class="icon-iconos-06"></i>'.$contact->hours.'</span>';
                echo'<span><i class="icon-iconos-04"></i>'.$contact->days.'</span>';
                echo'</div>';
                echo'</div>';
                echo'<iframe class="googleMap" id="gmap_canvas" src="'.$gMapLocation.'" frameborder="0" scrolling="no"></iframe>';
                echo'<a href="https://www.pureblack.de/google-maps/"></a>';
                echo'</div>';
                $num ++;
            }

    ?>
    <section class="section1">
        <div class="innerWrapper">
            <img class="slide" src="{{asset('images/img_contacto_1.jpg')}}">
            <img class="slide" src="{{asset('images/img_contacto_3.jpg')}}">
            <img class="slide" src="{{asset('images/img_contacto_2.jpg')}}">
        </div>
    </section>
    <script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
@stop
@section('footer')