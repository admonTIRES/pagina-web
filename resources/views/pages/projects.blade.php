@extends('layouts.base')
@section('content')
<div class="carouselNews">
    <div class="hola">
        <div class="carousel__news">
            <!-- Curso WellControl IADC -->
            <a href="{{ route('curso-wellcontrol-iadc') }}">
                <div class="news" data-image="img/plataforma.jpeg">
                    <div class="news__content">
                        <h3 class="news__title">
                            Capacitación en control de pozos
                        </h3>
                        <p class="news__text">
                            A través de nuestro socio comercial Smith Mason & CO, proveemos cursos de control de pozos
                            con certificación internacional IADC-WellSharp nivel introductorio, nivel perforador y nivel
                            supervisor con preventor (BOP) de superficie y combinado (superficie y submarino) para
                            operaciones de perforación, completamiento y reacondicionamiento de pozos petroleros.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">Cursos</div>
                        <div class="news__month-year">
                            Agosto<br>2017
                        </div>
                    </div>
                </div>
            </a>

            <!-- Curso WellControl IWCF -->
            <a href="{{ route('curso-wellcontrol-iwcf') }}">
                <div class="news" data-image="img/plataforma.jpeg">
                    <div class="news__content">
                        <h3 class="news__title"> control de pozos ARS y SMST - PEMEX PEP</h3>
                        <p class="news__text">
                            Contrato para la elaboración y/o actualización de estudios de higiene industrial de las
                            instalaciones de PEMEX EXPLORACIÓN Y PRODUCCIÓN (PEP) e integración de los servicios
                            preventivos
                            de seguridad y salud en el trabajo
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">Safety</div>
                        <div class="news__month-year">
                            Enero<br>2020
                        </div>
                    </div>
                </div>
            </a>

            <!-- Curso Prevención de Pega de Tubería SSP -->
            <a href="{{ route('pega-de-tubería-ssp') }}">
                <div class="news" data-image="img/plataforma.jpeg">
                    <div class="news__content">
                        <h3 class="news__title">Prevención de pega de tubería (SSP)</h3>
                        <p class="news__text">
                            La pega de tubería es la causa principal del tiempo no productivo y no debe considerarse
                            como un peligro inevitable.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">SSP</div>
                        <div class="news__month-year">
                            Agosto<br>2025
                        </div>
                    </div>
                </div>
            </a>

            <!-- News 1 -->
            <div class="news" data-image="img/plataforma.jpeg">
                <div class="news__content">
                    <h3 class="news__title">Inspección de equipos de perforación (Land Rigs)</h3>
                    <p class="news__text">
                        Próximamente
                    </p>
                </div>
                <div class="news__divider"></div>
                <div class="news__footer">
                    <div class="news__date">Land Rigs</div>
                    <div class="news__month-year">
                        Próximamente<br>2025
                    </div>
                </div>
            </div>

            <!-- News 1 -->
            <div class="news" data-image="img/plataforma.jpeg">
                <div class="news__content">
                    <h3 class="news__title">Inspección de equipos de perforación (Land Rigs)</h3>
                    <p class="news__text">
                        Próximamente
                    </p>
                </div>
                <div class="news__divider"></div>
                <div class="news__footer">
                    <div class="news__date">Land Rigs</div>
                    <div class="news__month-year">
                        Próximamente<br>2025
                    </div>
                </div>
            </div>

            <!-- News 1 -->
            <div class="news" data-image="img/plataforma.jpeg">
                <div class="news__content">
                    <h3 class="news__title">Inspección de equipos de perforación (Land Rigs)</h3>
                    <p class="news__text">
                        Próximamente
                    </p>
                </div>
                <div class="news__divider"></div>
                <div class="news__footer">
                    <div class="news__date">Land Rigs</div>
                    <div class="news__month-year">
                        Próximamente<br>2025
                    </div>
                </div>
            </div>

        </div>

        <div class="carousel__nav">
            <button class="carousel__button carousel__button--prev">&#10094;</button>
            <button class="carousel__button carousel__button--next">&#10095;</button>
        </div>
    </div>
</div>
@endsection