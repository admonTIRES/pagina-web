@extends('layouts.base')
@section('content')

<style>
    .relevant-card__action {
        margin-top: 10px;
        text-align: center;
    }

    .btn-contacto {
        display: inline-block;
        padding: 6px 16px;
        font-size: 13px;
        background-color: #ff585d;
        color: white;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .btn-contacto:hover {
        background-color: #ff585d;
    }
</style>



<div class="portada">
    <img src="img/mar.png" class="platform" alt="Plataforma petrolera">
    <div class="content__text">
        <h1>Soluciones para <br>las Industrias</h1>
        <p> Results In Performance, es una empresa líder en soluciones técnicas
            (perforación), de salud y seguridad en el trabajo, liderazgo, medio
            ambiente y calidad, las cuales están dirigidas a todo tipo de industrias.
        </p>
    </div>

    <div class="content">
        <div class="c_c">
            <div class="carousel-container">

                <div class="carousel-track">

                    <div class="relevant-card">
                        <div class="relevant-card__header">
                            <h3 class="relevant-card__title">Curso de control de pozos</h3>
                        </div>
                        <p class="relevant-card__description">
                            Certificación IWCF - Nivel 2,3 y 4 <br> Drilling, Surface Only (5 días - 32 horas)
                        </p>
                        <div class="relevant-card__footer">
                            <div class="relevant-card__date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                    <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z" />
                                </svg>
                                Agosto 04 - 08
                            </div>
                        </div>
                        <br>
                        <div class="relevant-card__action">
                            <a href="#" class="btn-contacto" onclick="document.getElementById('CONTACTANOS_ID').scrollIntoView({ behavior: 'smooth' }); return false;">Contáctenos</a>
                        </div>
                    </div>


                    <div class="relevant-card">
                        <div class="relevant-card__header">
                            <h3 class="relevant-card__title">Curso de control de pozos</h3>
                        </div>
                        <p class="relevant-card__description">
                            Certificación IADC WellSharp - Supervisor, <br> Surface Only (4 días - 32 horas )
                        </p>
                        <div class="relevant-card__footer">
                            <div class="relevant-card__date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                    <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z" />
                                </svg>
                                Agosto 25 - 28
                            </div>
                        </div>
                        <br>
                        <div class="relevant-card__action">
                            <a href="#" class="btn-contacto" onclick="document.getElementById('CONTACTANOS_ID').scrollIntoView({ behavior: 'smooth' }); return false;">Contáctenos</a>
                        </div>
                    </div>


                    <div class="relevant-card">
                        <div class="relevant-card__header">
                            <h3 class="relevant-card__title">Curso de control de pozos</h3>
                        </div>
                        <p class="relevant-card__description">
                            Certificación IADC WellSharp - Perforador, <br> Surface Only (4 días - 32 horas )
                        </p>
                        <div class="relevant-card__footer">
                            <div class="relevant-card__date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                    <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z" />
                                </svg>
                                Agosto 25 - 28
                            </div>
                        </div>
                        <br>
                        <div class="relevant-card__action">
                            <a href="#" class="btn-contacto" onclick="document.getElementById('CONTACTANOS_ID').scrollIntoView({ behavior: 'smooth' }); return false;">Contáctenos</a>
                        </div>
                    </div>



                    <div class="relevant-card">
                        <div class="relevant-card__header">
                            <h3 class="relevant-card__title">Curso de control de pozos</h3>
                        </div>
                        <p class="relevant-card__description">
                            Certificación IADC WellSharp - Introductorio
                        </p>
                        <div class="relevant-card__footer">
                            <div class="relevant-card__date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
                                    <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z" />
                                </svg>
                                Agosto 29 - 30
                            </div>
                        </div>
                        <br><br>
                        <div class="relevant-card__action">
                            <a href="#" class="btn-contacto" onclick="document.getElementById('CONTACTANOS_ID').scrollIntoView({ behavior: 'smooth' }); return false;">Contáctenos</a>
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
    </div>
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
            <h1>SEADRILL MÉXICO • TECPETROL • OCTAL DE MÉXICO • PEMEX-PEP • CFE • BORR DRILLING • MICROANÁLISIS • PERFOMEX • PEMEX-TRI •
                CENAGAS • JAGUAR EP • PANTERA EP • REPSOL EXPLORACIÓN MÉXICO • NOBLE CORP • FONTIS ENERGY • PERENCO
                MÉXICO • PERENCO GUATEMALA • OPEX • CLARIANT • Matyep • UTCAM • &nbsp;
                SEADRILL MÉXICO • TECPETROL • OCTAL DE MÉXICO • PEMEX-PEP • CFE • BORR DRILLING • MICROANÁLISIS • PERFOMEX • PEMEX-TRI •
                CENAGAS • JAGUAR EP • PANTERA EP • REPSOL EXPLORACIÓN MÉXICO • NOBLE CORP • FONTIS ENERGY • PERENCO
                MÉXICO • PERENCO GUATEMALA • OPEX • CLARIANT • Matyep • UTCAM •&nbsp;
                SEADRILL MÉXICO • TECPETROL • OCTAL DE MÉXICO • PEMEX-PEP • CFE • BORR DRILLING • MICROANÁLISIS • PERFOMEX • PEMEX-TRI •
                CENAGAS • JAGUAR EP • PANTERA EP • REPSOL EXPLORACIÓN MÉXICO • NOBLE CORP • FONTIS ENERGY • PERENCO
                MÉXICO • PERENCO GUATEMALA • OPEX • CLARIANT • Matyep • UTCAM •
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
                        <h1>+ 50</h1>
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
                        <h1>+ 50</h1>
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