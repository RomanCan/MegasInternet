<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="robots" content="index,nofollow" />
    <meta name="description" content="Internet a tú comodidad" />
    <meta name="keywords"
        content="megas internet tekax, wifi tekax, internet tekax, Megas Internet Tekax, megas internet tekax, megas internet" />
    <meta name="author" content="Megas Internet" />
    <meta name="copyright" content="Megas Internet" />
    <meta http-equiv="Cache-Control: max-age=31536000" />
    <meta http-equiv="expires: max-age=31536000" />
    <title>Megas Internet Tekax</title>
    <link rel="shortcut icon" href="public/img/logo.png" />
    {{-- TOKEN PARA CAMBIOS --}}
    <meta name="token" id="token" value="{{ csrf_token() }}">
    {{-- META PARA RUTA DINAMICA --}}
    {{-- <meta name="route" id="route" value="{{ url('/') }}" name="route"> --}}
    <!-- Font Awesome 5 -->
    {{-- <link rel="stylesheet" href="../../public/libs/font/all.min.css"> --}}
    <!-- Page CSS -->
    <link rel="stylesheet" href="libs/swiper/dist/css/swiper.min.css">
    <!-- Purpose CSS -->
    <link rel="stylesheet" href="css/purpose.min.css" id="stylesheet">
    {{-- <link rel="stylesheet" href="../../public/css/estilos.min.css" /> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> --}}

    {{-- scripts --}}
    <script src="js/vue.min.js"></script>
    <script src="js/vue-resource.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>

</head>

<body>
    <header class="header header-transparent" id="header-main">
        <!-- Main navbar -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
            <div class="container px-lg-0">
                <!-- Logo -->
                <a class="navbar-brand mr-lg-5" href="{{ url('/') }}">
                    <img alt="MegasInternetLogo" src="img/logo.png" id="navbar-logo" style="height: 70px;">
                </a>
                <!-- Navbar collapse trigger -->
                <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                    data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar nav -->
                <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center">
                        <!-- Home - Overview  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="#conocenos">¿Quién nos conoce?</a>
                        </li>
                        <!-- Pages menu -->
                        <li class="nav-item  dropdown dropdown-animate">
                            <a class="nav-link" href="#beneficios">Beneficios</a>
                        </li>
                        <!-- Sections menu -->
                        <li class="nav-item  dropdown dropdown-animate">
                            <a class="nav-link" href="#nuestros_paquetes">Paquetes</a>
                        </li>
                        <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link" href="#servicios_extra">Servicios extra</a>
                        </li>
                        <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link" href="#ubicacion">Ubicación</a>
                        </li>
                        <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link" href="#contactanos">Contactanos</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <div class="main-content">
        <!-- Header -->
        <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
            <div class="section-inner bg-gradient-primary"></div>
            <!-- SVG illustration -->
            <div class="pt-7 position-absolute middle right-0 col-lg-7 col-xl-6 d-none d-lg-block">
                <figure class="w-100" style="max-width: 600px;">
                    <img alt="Image placeholder" src="img/logo.png" class="svg-inject img-fluid" style="height: 600px;">
                </figure>
            </div>
            <!-- Hero container -->
            <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-5 col-xl-6 text-center text-lg-left">
                            <div class="d-none d-lg-block mb-4">
                            </div>
                            <div>
                                <h2 class="text-white mb-4">
                                    <span class="display-4 font-weight-light">Somos una empresa dedicada a brindar
                                        internet local</span>
                                    <span class="d-block"><strong class="font-weight-light"> ¿Quieres saber más
                                            de nosotros?</strong></span>
                                </h2>
                                <div class="mt-5">
                                    <a href="#beneficios"
                                        class="btn btn-outline-white rounded-pill hover-translate-y-n3 btn-icon d-xl-inline-block scroll-me">
                                        <span class="btn-inner--text">Beneficios</span>
                                        <span class="btn-inner--icon"><i class="fas fa-file-alt"></i></span>

                                    </a>
                                    <a href="#nuestros_paquetes"
                                        class="btn btn-outline-white rounded-pill hover-translate-y-n3 btn-icon d-xl-inline-block scroll-me">
                                        <span class="btn-inner--text">Nuestros paquetes</span>
                                        <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quién nos conoce -->
        <section id="conocenos" class="slice slice-lg bg-section-secondary overflow-hidden">
            <div class="container position-relative zindex-100">
                <div class="mb-5 px-3 text-center">
                    <h2 class=" mt-4">¿Quién nos conoce?</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card px-4">
                            <div class="card-body py-5 text-center">
                                <div class="d-flex align-items-center">
                                    <div class="col-lg-12 ">
                                        <a href="src/cartaderechosminimosprofeco.pdf" target="_blank"><img
                                                src="img/LogoProfeco.png" class="image_legal" alt="Logo de Profeco"
                                                style="margin:auto; display:block"></a>
                                        {{-- class="icon bg-gradient-warning text-white rounded-circle icon-shape shadow-warning">
                                        <i class="fab fa-node-js"></i> --}}
                                    </div>
                                    {{-- <div class="icon-text pl-4">
                                        <h5 class="mb-0">Built by developers for developers</h5>
                                    </div> --}}
                                </div>
                                <h4 class="lead lh-180" style="padding: 1rem 1rem 0rem 1rem">Contamos con la
                                    verificación y
                                    validación de contratos por
                                    <a href="src/cartaderechosminimosprofeco.pdf" target="_blank">La
                                        Procudadoría
                                        Federal Del
                                        Consumidor</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card px-4">
                            <div class="card-body py-5 text-center">
                                <div class="d-flex align-items-center">
                                    <div class="col-lg-12">
                                        <a href="src/aviso_privacidad.pdf" target="_blank"><img src="img/LogoIFT.png"
                                                alt="Logo de IFT" class="image_legal_right"
                                                style="margin:auto; display:block;"></a>
                                        {{-- class="icon bg-gradient-info text-white rounded-circle icon-shape shadow-info">
                                        <i class="fas fa-thumbs-up"></i> --}}
                                    </div>
                                    {{-- <div class="icon-text pl-4">
                                        <h5 class="mb-0">Made for great first impressions</h5>
                                    </div> --}}
                                </div>
                                <h4 class="lead lh-180" style="padding: 1rem 1rem 0rem 1rem">Contamos con la
                                    autorización y validación del <a href="src/aviso_privacidad.pdf"
                                        target="_blank">Instituto Federal de
                                        Telecomunicaciones
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Beneficios -->
        <section id="beneficios" class="slice bg-section-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center" style="padding: 2rem">
                        <h2 class="mt-4">Beneficios</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                            <div class="px-4 py-5">
                                <img alt="Image placeholder" src="img/fast.svg" class="svg-inject image_size">
                            </div>
                            <div class="px-4 pb-5">
                                <h5>Internet rápido</h5>
                                <p class="text-muted">Internet de alta velocidad, para videoconferencias, videos en
                                    youtube, video juegos y mucho más.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                            <div class="px-4 py-5">
                                <img alt="Image placeholder" src="img/man.svg" class="svg-inject image_size">
                            </div>
                            <div class="px-4 pb-5">
                                <h5>Mantenimiento</h5>
                                <p class="text-muted">Ofrecemos mantenimiento a el equipo en general, así como
                                    verificacion de alineacion, reconfiguracíon, entre otros</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                            <div class="px-4 py-5">
                                <img alt="Image placeholder" src="img/support.svg" class="svg-inject image_size">
                            </div>
                            <div class="px-4 pb-5">
                                <h5>Soporte técnico</h5>
                                <p class="text-muted">Soporte técnico en caso de tener problemas con la red (se
                                    agendara una cita en caso de no poder pasar ese mismo día).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Nuestros Paquetes -->
        <section id="nuestros_paquetes" class="slice slice-lg" style="padding-top:1rem; padding-bottom:1rem !important">
            <div class="container">
                <div class="mb-5 text-center">
                    <h2 class=" mt-4">Nuestros Paquetes</h2>
                    <div class="fluid-paragraph mt-3">
                        <h4 class="lead lh-180">Contamos con paquetes definidos, además de paquetes personalizados
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 text-center ">
                        <div class="mb-4 card hover-shadow-lg hover-translate-y-n10">
                            <div class="py-5">
                                <div class="icon text-primary">
                                    <img src="img/box.svg" alt=""
                                        style="margin:auto; display:block; height:auto;width:100px">
                                </div>
                            </div>
                            <h4 class="">Básico</h4>
                            <p class=" mt-2 mb-0">$250 X 5Mg de
                                velocidad al mes</p>
                            <a href="#contactanos"><button class="btn btn-outline-primary">Solicitar</button></a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 text-center ">
                        <div class="mb-4 card hover-shadow-lg hover-translate-y-n10">
                            <div class="py-5">
                                <div class="icon text-primary">
                                    <img src="img/box.svg" alt=""
                                        style="margin:auto; display:block; height:auto;width:100px">
                                </div>
                            </div>
                            <h4 class="">Medio</h4>
                            <p class=" mt-2 mb-0">$375 X 7Mg de
                                velocidad al
                                mes</p>
                            <a href="#contactanos"><button class="btn btn-outline-primary">Solicitar</button></a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 text-center ">
                        <div class="mb-4 card hover-shadow-lg hover-translate-y-n10">
                            <div class="py-5">
                                <div class="icon text-primary">
                                    <img src="img/box.svg" alt=""
                                        style="margin:auto; display:block; height:auto;width:100px">
                                </div>
                            </div>
                            <h4 class="">Premium</h4>
                            <p class=" mt-2 mb-0">$500 X 10Mg de
                                velocidad
                                al mes</p>
                            <a href="#contactanos"><button class="btn btn-outline-primary">Solicitar</button></a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 text-center ">
                        <div class="mb-4 card hover-shadow-lg hover-translate-y-n10">
                            <div class="py-5">
                                <div class="icon text-primary">
                                    <img src="img/box.svg" alt=""
                                        style="margin:auto; display:block; height:auto;width:100px">
                                </div>
                            </div>
                            <h4 class="">Personalizado</h4>
                            <p class=" mt-2 mb-0">Se debe
                                realizar
                                una cotización previa</p>
                            <a href="#contactanos"><button class="btn btn-outline-primary">Solicitar</button></a>

                        </div>
                    </div>
                </div>
        </section>
        <!-- Servicios Extra -->
        <section id="servicios_extra" class="slice slice-lg">
            <div class="container" style="padding-top:1rem;padding-bottom: 3rem">
                <div class="row row-grid justify-content-around align-items-center">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <h2 class="mt-4">Servicios extra</h2>
                            <h4 class="lead lh-180">Así como ofrecemos servicios de red
                                de internet, tambien ofrecemos:</h4>
                        </div>
                        <div class="">
                            <ul class=" list-unstyled">
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="h6 mb-0">Cambio de compañía.</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="h6 mb-0">Cambio de equipos(antenas, modems,
                                                routers).</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="h6 mb-0">Personalización de paquetes.</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="h6 mb-0">Instalaciones de cámaras.</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="h6 mb-0">Mantenimiento preventivo y correctivo a
                                                equipos(computadoras, telefonos moviles, impresoras).</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="h6 mb-0">Ventas de equipos de computo.</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="h6 mb-0">Ventas de impresoras.</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="h6 mb-0">Accesorios de telefonía.</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img alt="Internet" src="img/internet.svg" class="img-fluid img-center">
                    </div>
                </div>
            </div>
        </section>
        {{-- Ubicacion --}}
        <section id="ubicacion" class="slice slice-lg">
            <div class="ubicacion text-center">
                <div class="text-center">
                    <h2 class="mt-4">Nos ubicamos en:</h2>
                    <h4 class="lead lh-180">Nuestros servicios se expanden hasta las comisarias de Tekax de Álvaro
                        Obregón</h4>
                </div>

                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" style="text-align: center;">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                    <a href="https://1map.com/es/map-embed">1 Map</a>
                </div>
            </div>
        </section>
        <!-- Contactanos-->
        <section id="contactanos" class="slice slice-lg">
            <div class="container" style="padding-top:1rem; padding-bottom:1rem !important" id="contacto">
                <div class="row row-grid justify-content-around align-items-center">
                    <h2 class="mt-5">Contáctanos</h2>
                </div>
                <form action="">
                    @csrf
                    <div class="row row-grid justify-content-around align-items-center">
                        <div class="col-lg-6 col-sm-12 text-center">
                            <div class="mb-4">
                                <h4 class="lead lh-180" for="nombre" class="form-label">Asunto:</h4>
                                <input type="text" class="form-control" required id="subject" name="subject"
                                    placeholder="Ejemplo: Solicitud de servicio" v-model="subject">
                            </div>

                            <div class="mb-4">
                                <h4 class="lead lh-180" for="email" class="form-label">Correo:</h4>
                                <input type="email" class="form-control" required id="correo" name="correo"
                                    placeholder="name@example.com" v-model="correo">
                            </div>

                        </div>
                        <div class="col-lg-6 col-sm-12 text-center">
                            <div class="mb-4">
                                <h4 class="lead lh-180" for="nombre" class="form-label">Nombre completo:</h4>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="@megasinternet" v-model="nombre" required>
                            </div>

                            <div class="mb-4">
                                <h4 class="lead lh-180" for="telefono" class="form-label">Telefono:</h4>
                                <input type="text" class="form-control" id="telefono" name="telefono"
                                    placeholder="9999900000" v-model="telefono" maxlength="10" required>
                            </div>

                        </div>
                        <div class="col-lg-12 col-sm-12 text-center">
                            <div class="mb-4">
                                <h4 class="lead lh-180" for="mensaje" class="form-label">Mensaje:</h4>
                                <textarea class="form-control" required id="mensaje" name="mensaje" v-model="mensaje" required></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" @click="enviarEmail()">Enviar</button>
                </div>

            </div>
        </section>
    </div>
    <footer id="footer-main">
        <div class="footer footer-dark bg-gradient-primary footer-rotate">
            <div class="container">
                <div class="row pt-md">
                    <div class="col-lg-6 mb-4 col-sm-12 mb-lg-0">
                        {{-- <a href="index.html">
                            <img src="img/logo.png" alt="Footer logo" style="height: 70px;">
                        </a> --}}
                        <h6 class="heading mb-3 text-center" style="font-size: 20px">Información</h6>
                        <ul class="list-unstyled">
                            <li>
                                <p> <i class="fas fa-clock"></i> Horario:</p>
                            </li>
                            <li>
                                <p> De 08:00am a 01:00pm y 05:00pm a 08:00pm</p>
                            </li>
                            <li>
                                <p> <i class="fas fa-phone"></i> Teléfono:</p>
                            </li>
                            <li>
                                <p> +52 997 129 6085 | +52 997 124 5723</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i> Correo:</p>
                            </li>
                            <li>
                                <p> megas.internetekax@gmail.com</p>
                            </li>
                            <li>
                                <p> <i class="fas fa-tools"></i> Atención Al Cliente En Dirección:</p>
                            </li>
                            <li>
                                <p> Calle 40 X 59 Y 61 Col, Padre Eterno</p>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                        <h6 class="heading mb-3 text-center" style="font-size: 20px">Nosotros</h6>
                        <ul class="list-unstyled">
                            <li>
                                <p><i class="fas fa-user"></i> Victor Manuel Can May</p>
                            </li>
                            <li>
                                <p><i class="fas fa-user"></i> Samuel Contreras Cab</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                        <h6 class="heading mb-3 text-center" style="font-size: 20px">Legal</h6>
                        <ul class="list-unstyled">
                            <li>
                                <p>
                                    <a href="../../public/src/cartaderechosminimosprofeco.pdf" target="_blank">
                                        Carta De Derechos Mínimos Profeco
                                    </a>
                                </p>

                            </li>
                            <li>
                                <p>
                                    <a>
                                        Número De Autorización de IFT: IFT/223/UCS/AUT-COM-007/2021
                                    </a>
                                </p>

                            </li>
                        </ul>
                    </div>

                </div>
                <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                    <div class="col-md-12 col-xs-12">

                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
                            <ul style="list-style:none">
                                <li>
                                    &copy; 2021 MegasInternet&nbsp;|&nbsp;Todos Los Derechos Reservados&nbsp;|&nbsp;

                                    <a href="../../public/src/aviso_privacidad.pdf" class="font-weight-bold"
                                        target="_blank">Aviso
                                        De
                                        Privacidad.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/contacto/contacto.js"></script>
    <script>
        (function() {
            var setting = {
                "height": 557,
                // "width": 786,
                "zoom": 12,
                "queryString": "Tekax de Álvaro Obregón, Yuc., México",
                "place_id": "ChIJIzJL7ekaV48Rpkcf6dhcBr4",
                "satellite": false,
                "centerCoord": [20.20426772675333, -89.28590551964957],
                "cid": "0xbe065cd8e91f47a6",
                "lang": "es",
                "cityUrl": "/mexico/ticul-64724",
                "cityAnchorText": "Mapa de Ticul, Yucatán, México",
                "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                "embed_id": "545092"
            };
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=545092';
            s.async = true;
            s.onload = function(e) {
                window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
        })();
    </script>
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="public/js/purpose/purpose.core.min.js"></script>
    <!-- Page JS -->
    <script src="public/libs/swiper/dist/js/swiper.min.js"></script>
    <!-- Purpose JS -->
    <script src="public/js/purpose/purpose.min.js"></script>
    <!-- Demo JS - remove it when starting your project -->
    {{-- <script src="../../public/js/purpose/demo.js"></script> --}}

</body>

</html>
{{-- <input type="hidden" name="route" value="{{ url('/') }}"> --}}
