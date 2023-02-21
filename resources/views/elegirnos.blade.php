@extends('registration')
@section('header')
@section('content')
    <div id="elegirnos">
        <div class="aboutUsWhoWeAre">
            <h1 id="whyChooseUsNonResp">¿Por qué elegirnos?</h1>
            <div class="containerElement" id="elegirnosAboutUs1">
                <img style="object-position: 0 0;" src="{{asset('images/eligenos.jpg')}}">
                <div class="blueBox">
                    <h1 id="whyChooseUs">¿Por qué elegirnos?</h1>
                    <p>
                        <b class="chooseUsBold">Orientación al trabajo.</b><br /> Entendemos el mercado
                        laboral y mantenemos una relación cercana, ágil y resolutiva con empresas del sector para así convertirnos en un proveedor de personal altamente
                        cualificado.<br /><br />
                        <b class="chooseUsBold">Comprometidos con la calidad.</b><br /> Nuestra política de calidad, mejora continua y excelencia en el servicio se plasma en que somos de los pocos
                        centros de formación en Canarias en disponer de las certificaciones ISO 9001, EFQM +400, 14000 y EMAS.
                    </p>
                </div>
            </div>
        </div>

        <div class="aboutUsWhoWeAre" id="chooseUsLastDiv">
            <div class="containerElement2" id="elegirnosAboutUs2">
                <img src="{{asset('images/eligenos2.jpg')}}">
                <div class="blueBox">
                    <p><b class="chooseUsBold">Capital humano.</b><br /> Nuestro personal tiene una sólida
                        formación académica y un perfil técnico avanzado. Somos flexibles y dinámicos, para adaptarnos a las necesidades del mercado en cada proyecto.<br/><br/>
                        <b class="chooseUsBold">Localización.</b><br/> Nuestra envidiable situación, en pleno corazón turístico de Maspalomas aporta un valor añadido para prestar
                        un servicio cercano y de calidad.<br/><br/>
                        <b class="chooseUsBold">Espíritu innovador.</b> Aplicamos la Investigación + Desarrollo + innovación a todos los productos y servicios que proveemos, para
                        poder plantear una formación eficaz y puntera que contribuya a una sociedad más próspera.
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')