<!-- resources/views/home.blade.php -->

@extends('template.layout')

@section('title', 'Inicio - Mobware Solutions')

@section('content')
<section class="hero-section border-danger mb-2">
    <div class="logo-container">
        <img src="{{ asset('images/svg/LogoMOBWAREWhite.svg') }}" alt="Mobware Solutions Logo" class="img-fluid mb-3">
        <h1 class="display-4">MOBWARE SOLUTIONS</h1>
        <p class="lead">"TECNOLOGIA QUE IMPULSA TU NEGOCIO"</p>
        <a class="text-gray CONOCENOS d-none d-md-block  mt-3" href="#us">CONOCENOS <br>
            <img src="{{ asset('images/svg/chevron-down-solid.svg') }}" alt="Mobware Solutions Logo" class="icon-down mb-3">
        </a>
    </div>
    <img src="{{ asset('images/svg/Wave.svg') }}" alt="Mobware Solutions wave" class="wave">
</section>

<br>
<br id="us">


<section class="position-relative  bg-BlueMob h-100 us-cont">
    <article class="position-absolute top-0 start-50 translate-middle border box us bg-white rounded-3">
        <article class="row">
            <div class="col-md-7 col-12 d-flex flex-column justify-content-center">
                <div class="row p-2">
                    <img src="{{ asset('images/svg/LogoMOBWARE.svg') }}" alt="Mobware Solutions Logo" class="img-info py-3">
                </div>
                <div class="row p-2">
                    <p class="lead text-center "><b>En MOBware Solutions, somos una consultoría de software dedicada a transformar ideas en soluciones tecnológicas innovadoras y efectivas.</b></p>
                </div>
            </div>
            <div class="col-md-5 col-12 justify-content-center d-none d-md-flex">
                <img src="{{ asset('images/gif/html.gif') }}" alt="Mobware Solutions Logo" class="us-gif mb-3">
            </div>
        </article>
    </article>
</section>


@endsection