@extends('layouts.base')
@section('content')

<div class="portada">
    <img src="img/mar.png" class="platform" alt="Plataforma petrolera">
    <div class="content__text">
        <h1>Soluciones para <br>las Industrias</h1>
        <p> Results In Performance, es una empresa líder en soluciones técnicas
            (perforación), de salud y seguridad en el trabajo, liderazgo, medio
            ambiente y calidad, las cuales están dirigidas a todo tipo de industrias.
        </p>
    </div>

    {{-- <div class="content">
        <div class="c_c">
            <div class="carousel-container">
                <div class="carousel-nav">
                    <button class="carousel-button carousel-button-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#8b4513">
                            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
                        </svg>
                    </button>
                    <button class="carousel-button carousel-button-next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#8b4513">
                            <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                        </svg>
                    </button>
                </div>

                <div class="carousel-track">
                    <div class="relevant-card">
                        <div class="relevant-card__header">
                            <!-- <div class="relevant-card__icon">
                                <img src="img/icon__services/c-rojo.png" alt="Icono curso">
                            </div> -->
                            <h3 class="relevant-card__title">Curso de Perforación de Pozos MDC</h3>
                        </div>
                        <p class="relevant-card__description">A través de nuestro socio comercial Smith Mason & Co,
                            proveemos cursos de control de pozos con certificación</p>
                        <div class="relevant-card__footer">
                            <div class="relevant-card__date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z">
                                    </path>
                                </svg>
                                15 de Diciembre 2025
                            </div>
                        </div>
                    </div>

                    <div class="relevant-card">
                        <div class="relevant-card__header">
                            <!-- <div class="relevant-card__icon">
                                <img src="img/icon__services/c-rojo.png" alt="Icono curso">
                            </div> -->
                            <h3 class="relevant-card__title">Curso de Perforación de Pozos MDC</h3>
                        </div>
                        <p class="relevant-card__description">A través de nuestro socio comercial Smith Mason & Co,
                            proveemos cursos de control de pozos con certificación</p>
                        <div class="relevant-card__footer">
                            <div class="relevant-card__date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z">
                                    </path>
                                </svg>
                                15 de Diciembre 2025
                            </div>
                        </div>
                    </div>

                    <!-- Tarjetas adicionales para mostrar -->
                    <div class="relevant-card">
                        <div class="relevant-card__header">
                            <!-- <div class="relevant-card__icon">
                                <img src="/api/placeholder/30/30" alt="Icono curso">
                            </div> -->
                            <h3 class="relevant-card__title">Curso de Manejo de Fluidos</h3>
                        </div>
                        <p class="relevant-card__description">Curso especializado sobre manejo y control de fluidos en
                            operaciones de perforación con certificación internacional</p>
                        <div class="relevant-card__footer">
                            <div class="relevant-card__date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z">
                                    </path>
                                </svg>
                                20 de Enero 2026
                            </div>
                        </div>
                    </div>

                    <div class="relevant-card">
                        <div class="relevant-card__header">
                            <!-- <div class="relevant-card__icon">
                                <img src="/api/placeholder/30/30" alt="Icono curso">
                            </div> -->
                            <h3 class="relevant-card__title">Seguridad en Operaciones</h3>
                        </div>
                        <p class="relevant-card__description">Capacitación intensiva sobre protocolos de seguridad en
                            entornos de perforación y extracción
                        </p>
                        <div class="relevant-card__footer">
                            <div class="relevant-card__date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z">
                                    </path>
                                </svg>
                                5 de Febrero 2026
                            </div>
                        </div>
                    </div>

                    <div class="relevant-card">
                        <div class="relevant-card__header">
                            <!-- <div class="relevant-card__icon">
                                <img src="/api/placeholder/30/30" alt="Icono curso">
                            </div> -->
                            <h3 class="relevant-card__title">Tecnologías de Perforación Avanzada</h3>
                        </div>
                        <p class="relevant-card__description">
                            Aprenda sobre las últimas innovaciones en equipos y técnicas de perforación de alta
                            eficiencia
                        </p>
                        <div class="relevant-card__footer">
                            <div class="relevant-card__date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z">
                                    </path>
                                </svg>
                                10 de Marzo 2026
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-dots">
                    <div class="carousel-dot active"></div>
                    <div class="carousel-dot"></div>
                    <div class="carousel-dot"></div>
                </div>
            </div>

        </div>
        <!-- fin prueba -->
    </div> --}}
</div>

<div class="lines-of-business">

    <div class="lines-of-business__text">
        <div class="lines-of-business__title">
            <h1>Conoce nuestras <br>líneas de negocios</h1>
        </div>

        <div>
            <p class="lines-of-business__subtitle">Somos un proveedor confiable de soluciones <br>para diferentes
                sectores proporcionando <br>innovación y valor agregado para manejar <br>sus riesgos.
            </p>
        </div>
    </div>

    <div class="lines-of-business__cards">

        <!-- No quitar este div, es importante para que se ajuste el siguiente, no sabemos porqué -->
        <div class="business__card lines-of-business__card content-section" data-type="liderazgo">
        </div>
        <!-- Card 1 -->
        <div class="business__card lines-of-business__card content-section section-1" data-type="liderazgo">
            <div class="card-content card-content--blue" data-type="liderazgo">
                <div class="lines-of-business__image">
                    <img src="img/icon__lineas/b-liderazgo.png" alt="">
                </div>
                <div>
                    <h2 class="lines-of-business__cardText">Soluciones de Liderazgo y Hab. Humanas</h2>
                </div>
            </div>
        </div>


        <!-- Card 2 -->
        <div class="business__card lines-of-business__card content-section section-2" data-type="medioambiente">
            <div class="card-content card-content--green" data-type="medioambiente">
                <div class="lines-of-business__image">
                    <img src="img/icon__lineas/b-medioAmbiente.png" alt="">
                </div>
                <div>
                    <h2 class="lines-of-business__cardText">Soluciones de Medio Ambiente</h2>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="business__card lines-of-business__card content-section section-3" data-type="tecnicas">
            <div class="card-content card-content--red" data-type="tecnicas">
                <div class="lines-of-business__image">
                    <img src="img/icon__lineas/b-tecnicas.png" alt="">
                </div>
                <div>
                    <h2 class="lines-of-business__cardText">Soluciones Técnicas</h2>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="business__card lines-of-business__card content-section section-4" data-type="calidad">
            <div class="card-content card-content--black" data-type="calidad">
                <div class="lines-of-business__image">
                    <img src="img/icon__lineas/b-calidad.png" alt="">
                </div>
                <div>
                    <h2 class="lines-of-business__cardText lines-of-business__cardText--white">Soluciones en Calidad
                    </h2>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="business__card lines-of-business__card content-section section-5" data-type="sst">
            <div class="card-content card-content--blueMarine" data-type="sst">
                <div class="lines-of-business__image">
                    <img src="img/icon__lineas/b-sst.png" alt="">
                </div>
                <div>
                    <h2 class="lines-of-business__cardText">Soluciones en SST</h2>
                </div>
            </div>
        </div>
        <!-- div cierre de todas las cards -->
    </div>

    <!-- Services Modal -->
    <div class="services__overlay" id="servicesOverlay">
        <div class="services__modal">
            <button class="services__close-button" id="closeModal">✕</button>

            <div class="services__content">
                <div class="services__header">
                    <h2 class="services__title">Explora nuestros servicios</h2>
                    <p class="services__description"></p>
                </div>

                <div class="services__grid" id="servicesContent">
                    <div class="services__card">
                        <div class="services__icon">
                            <i class="fas fa-wallet services__icon-img"></i>
                            <img src="" alt="">
                        </div>
                        <div class="services__name">Consultoría</div>
                    </div>

                    <div class="services__card">
                        <div class="services__icon">
                            <a href="{{ route('s-t__capacitacion') }}">
                                <i class="fas fa-credit-card services__icon-img"></i>
                                <!--<img src="img/capacitacion.svg" alt="">-->
                                <svg class="services__svg-icon" xmlns="http://www.w3.org/2000/svg" width="40"
                                    height="40" fill="currentColor" viewBox="0 0 24 24">


                                </svg>
                            </a>
                        </div>
                        <div class="services__name">Capacitación</div>
                    </div>

                    <div class="services__card">
                        <div class="services__icon">
                            <i class="fas fa-hand-holding-dollar services__icon-img"></i>
                        </div>
                        <div class="services__name">Mantenimiento</div>
                    </div>

                    <div class="services__card">
                        <div class="services__icon">
                            <i class="fas fa-chart-line services__icon-img"></i>
                        </div>
                        <div class="services__name">Comercialización</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="data-business">

    <div class="video-background">
        <video autoplay muted loop playsinline>
            <source src="img/Palabras Animadas.mp4" type="video/mp4">
            <source src="tu-video.webm" type="video/webm">
            <source src="tu-video.ogv" type="video/ogg">
            Tu navegador no soporta videos HTML5.
        </video>
    </div>

    <div class="data-business__textUp">
        <h1 class="data-business__textUp--small">Informes técnicos realizados</h1>
        <div class="data-business__plus">
            <h1 class="data-business__textUp">+</h1>
            <h1 class="data-business__textUp counter" data-target="2650">0</h1>

        </div>
    </div>

    <div class="data-business__textBottom">
        <div>
            <h1 class="data-business__textBottom--small">Hemos entrenado </h1>
            <div class="data-business__plus">
                <h1 class="data-business__textBottom">+</h1>
                <h1 class="data-business__textBottom counter" data-target="700">0</h1>
            </div>
        </div>

        <div>
            <h1 class="data-business__textBottom--small">Cursos impartidos</h1>
            <div class="data-business__plus">
                <h1 class="data-business__textBottom">+</h1>
                <h1 class="data-business__textBottom counter" data-target="120">0</h1>
            </div>
        </div>
    </div>
</div>

<div class="customers">
    <dix class="customers__container">
        <div class="customers__text">
            <h1>Confían en nosotros</h1>
        </div>
        <div class="customers__names">
            <h1>SEADRILL MÉXICO • TECPETROL • OCTAL DE MÉXICO • PEMEX-PEP • BORR DRILLING • MICROANÁLISIS • PERFOMEX • PEMEX-TRI •
                CENAGAS • JAGUAR EXPLORACIÓN Y PRODUCCIÓN • REPSOL EXPLORACIÓN MÉXICO • NOBLE CORP • FONTIS ENERGY • CFE • PERENCO
                MÉXICO • OPEX • PERENCO GUATEMALA • CLARIANT • &nbsp;
                SEADRILL MÉXICO • TECPETROL • OCTAL DE MÉXICO • PEMEX-PEP • BORR DRILLING • MICROANÁLISIS • PERFOMEX • PEMEX-TRI •
                CENAGAS • JAGUAR EXPLORACIÓN Y PRODUCCIÓN • REPSOL EXPLORACIÓN MÉXICO • NOBLE CORP • FONTIS ENERGY • CFE • PERENCO
                MÉXICO • OPEX • PERENCO GUATEMALA • CLARIANT • &nbsp;
                SEADRILL MÉXICO • TECPETROL • OCTAL DE MÉXICO • PEMEX-PEP • BORR DRILLING • MICROANÁLISIS • PERFOMEX • PEMEX-TRI •
                CENAGAS • JAGUAR EXPLORACIÓN Y PRODUCCIÓN • REPSOL EXPLORACIÓN MÉXICO • NOBLE CORP • FONTIS ENERGY • CFE • PERENCO
                MÉXICO • OPEX • PERENCO GUATEMALA • CLARIANT • 
            </h1>
        </div>
    </dix>
    <img class="customers__image" src="img/profesiones.png" alt="">
</div>

<div class="learning">
    <div class="learning__main">
        <div class="learning__textLarge">
            <h1>Aprende</h1>
            <h1>Crece</h1>
            <h1>Observa</h1>
        </div>

        <div class="learning__cards">
            <div class="learning__cardWoman">
                <img src="img/Woman.png" alt="">
                <div class="learning__about">
                    <div>
                        <p class="learning__paragraph">Cursos diseñados para mejorar el desempeño operacional y de HSE (SSPA) de sus trabajadores en
                            todo tipo de industrias.</p>
                    </div>
                    <div>
                        <h1>50</h1>
                        <h2>Cursos</h2>
                    </div>
                </div>
            </div>

            <div class="learning__cardMan">
                <img src="img/Man.png" alt="">
                <div class="learning__about">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <h1>50</h1>
                        <h2>Cursos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.learning')
</div>
@include('partials.news')
</div>

@include('partials.contact-form')
@include('partials.address')
@endsection