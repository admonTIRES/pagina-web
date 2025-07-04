@extends('layouts.base')
@section('content')
<div class="carouselNews">
    <div class="hola">
        <div class="carousel__news">
            <!-- Curso WellControl Cursos -->
            <a href="{{ route('control-pozos') }}">
                <div class="news" data-image="img/salon-clases.jpg">
                    <div class="news__content">
                        <h3 class="news__title">
                            Capacitación en control de pozos
                        </h3>
                        <p class="news__text">
                            A través de nuestro socio comercial Smith Mason & CO, proveemos cursos de control de pozos
                            con certificación internacional IADC-WellSharp nivel introductorio, nivel perforador y nivel
                            supervisor con preventor (BOP) de superficie y combinado (superficie y submarino).
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">Well Control</div>
                        <div class="news__month-year">
                            Desde<br>
                            2017
                        </div>
                    </div>
                </div>
            </a>

            <!-- Proyecto PEMEX PEP -->
            <a href="{{ route('pemex-pep') }}">
                <div class="news" data-image="img/plataforma.jpeg">
                    <div class="news__content">
                        <h3 class="news__title"> Contrato de ARS y SMST – PEMEX PEP</h3>
                        <p class="news__text">
                            Contrato para la elaboración y/o actualización de estudios de higiene industrial de las
                            instalaciones de PEMEX EXPLORACIÓN Y PRODUCCIÓN (PEP) e integración de los servicios
                            preventivos
                            de seguridad y salud en el trabajo
                        </p>
                        
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">PEMEX PEP</div>
                        <div class="news__month-year">
                            Desde<br>
                            2020
                        </div>
                    </div>
                </div>
            </a>

            <!-- Proyecto Cenegas -->
            <a href="{{ route('cenagas') }}">
                <div class="news" data-image="img/plataforma.jpeg">
                    <div class="news__content">
                        <h3 class="news__title">Contrato de ARP's y ARS - CENAGAS</h3>
                        <p class="news__text">
                            Contrato abierto para la elaboración del “Estudio para realizar el Análisis de Riesgo en los
                            Procesos (ARP) y el Atlas de Riesgo a la Salud en el Trabajo (ARS) en las instalaciones del
                            Centro Nacional de Control del Gas Natural – CENAGAS”, desde octubre de 2022 hasta marzo de
                            2023.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">CENAGAS</div>
                        <div class="news__month-year">
                            Desde<br>
                            2022
                        </div>
                    </div>
                </div>
            </a>

            <!-- Proyecto PEMEX TRI -->
            <a href="{{ route('pemex-tri') }}">
            <div class="news" data-image="img/plataforma.jpeg">
                <div class="news__content">
                    <h3 class="news__title">Contrato de ARS – PEMEX TRI</h3>
                    <p class="news__text">
                        Contrato de servicios para la elaboración del Atlas de Riesgos a la Salud (Actualización),
                        incluyendo la Identificación y Control de Agentes Físicos, Químicos y Biológicos, así como
                        factores de riesgo Ergonómicos y Psicosociales de la Refinería
                        Tula.
                    </p>
                </div>
                <div class="news__divider"></div>
                <div class="news__footer">
                    <div class="news__date">PEMEX TRI</div>
                    <div class="news__month-year">
                        Desde<br>
                        2022
                    </div>
                </div>
            </div>
            </a>

        </div>

        <div class="carousel__nav">
            <button class="carousel__button carousel__button--prev">&#10094;</button>
            <button class="carousel__button carousel__button--next">&#10095;</button>
        </div>
    </div>
</div>
@endsection