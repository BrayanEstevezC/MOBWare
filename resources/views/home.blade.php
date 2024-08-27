<!-- resources/views/home.blade.php -->

@extends('template.layout')

@section('title', 'Inicio - Mobware Solutions')

@section('content')
<section class="hero-section border-danger mb-2">
    <div class="logo-container">
        <img src="{{ asset('images/svg/LogoMOBWAREWhite.svg') }}" alt="Mobware Solutions Logo" class="img-fluid mb-3">
        <h2 class="display-6">"TECNOLOGIA QUE IMPULSA TU NEGOCIO"</h2>
        <!-- <h1 class="lead">""</h1> -->
        <a class="text-gray CONOCENOS d-none d-md-block  mt-3" href="#us">CONOCENOS <br>
            <img src="{{ asset('images/svg/chevron-down-solid.svg') }}" alt="Mobware Solutions Logo" class="icon-down mb-3">
        </a>
    </div>
    <img src="{{ asset('images/svg/Wave.svg') }}" alt="Mobware Solutions wave" class="wave">
</section>

<br>
<br id="us">


<section class="position-relative  bg-BlueMob h-30 us-cont">
    <article class="position-absolute top-0 start-50 translate-middle border box us bg-white rounded-3">
        <div class="row">
            <div class="col-md-6 col-12 d-flex flex-column justify-content-center p-4" data-aos="flip-up">
                <div class="row p-2">
                    <img src="{{ asset('images/svg/LogoMOBWARE.svg') }}" alt="Mobware Solutions Logo" class="img-info py-3">
                </div>
                <div class="row p-2">
                    <p class="lead text-center "><b>En MOBware Solutions, somos una consultoría de software dedicada a transformar ideas en soluciones tecnológicas innovadoras y efectivas.</b></p>
                </div>
            </div>
            <div class="col-md-6 col-12 justify-content-center d-none d-md-flex">
                <img src="{{ asset('images/gif/html.gif') }}" alt="Mobware Solutions Logo" class="us-gif mb-3">
            </div>
        </div>
    </article>
</section>

<section class="bg-BlueMob text-light">
    <article class="container-fluid" data-aos="fade-up">
        <div class="row py-3">
            <h1 class="text-center py-3"><b>SERVICIOS QUE OFRECEMOS</b></h1>
            <hr>
        </div>
        <div class="row py-2">

            <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="circle mt-2 d-flex justify-content-center align-items-center bg-BlueLight">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h4 class="pt-2">Desarrollo de software a medida</p>
            </div>

            <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="circle mt-2 d-flex justify-content-center align-items-center bg-BlueLight">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h4 class="pt-2">Consultoría tecnológica</p>
            </div>

            <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="circle mt-2 d-flex justify-content-center align-items-center bg-BlueLight">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h4 class="pt-2 text-center">Diseño y desarrollo de aplicaciones móviles</p>
            </div>

            <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="circle mt-2 d-flex justify-content-center align-items-center bg-BlueLight">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h4 class="pt-2">Diseño y desarrollo de páginas web</p>
            </div>

            <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="circle mt-2 d-flex justify-content-center align-items-center bg-BlueLight">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h4 class="pt-2">Sistemas web para digitalización</p>
            </div>

            <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="circle mt-2 d-flex justify-content-center align-items-center bg-BlueLight">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h4 class="pt-2">Ayuda para la era digital</p>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="circle mt-2 d-flex justify-content-center align-items-center bg-BlueLight">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h4 class="pt-2">Integración de sistemas</p>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="circle mt-2 d-flex justify-content-center align-items-center bg-BlueLight">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h4 class="pt-2">Mantenimiento y soporte técnico</p>
            </div>


        </div>
    </article>
</section>

<section class="team-section text-light mb-2">
    <img src="{{ asset('images/svg/waveBlue.svg') }}" alt="Mobware Solutions wave" class="waveBlue">
    <h1 class="display-4 border-bottom" data-aos="fade-down">NUESTRO EQUIPO</h1>

    <article class="position-absolute top-100 start-50 translate-middle border box w-95 bg-white text-dark rounded-3">
        <div class="row">
            <div class="col-md-6 col-12 d-flex flex-column justify-content-center p-4">

                <h1 class="display-4">Team MOBWARE</h1>
                <div class="row p-2">

                    <p class="lead text-center "><b>En MOBware Solutions, contamos con un equipo

                            multidisciplinario de profesionales apasionados

                            por la tecnología y comprometidos con la excelencia

                            en cada proyecto que emprendemos.

                            Nuestros expertos no solo poseen habilidades técnicas

                            avanzadas, sino también una profunda comprensión de

                            las necesidades del negocio y un enfoque colaborativo

                            que garantiza el éxito de nuestros clientes.</b></p>
                </div>
            </div>
            <div class="col-md-6 col-12 justify-content-center  d-flex p-3">
                <img src="{{ asset('images/svg/LogoMOBWARE.svg') }}" alt="Mobware Solutions Logo" class="img-team">
            </div>
        </div>
    </article>

</section>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/b0cb49c5f4.js" crossorigin="anonymous"></script>
@endsection