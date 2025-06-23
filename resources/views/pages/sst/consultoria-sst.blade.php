@extends('layouts.base')
@section('content')

<div class="carouselNews carousel__news--negro">
    <div class="hola">
        <div class="carousel__news">

            <!-- Consultoría Psicosociales -->
            <a href="{{ route('consultoria-psico') }}">
                <div class="news" data-image="archivosweb/Factor_psico/shutterstock_160000769.jpg">
                    <div class="news__content">
                        <h3 class="news__title">Evaluación e intervención de los factores de riesgos psicosociales</h3>
                        <p class="news__text">
                            Los factores de riesgo psicosocial son características de las condiciones de trabajo
                            que pueden afectar la salud mental y física.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">Evaluación</div>
                        <div class="news__month-year">
                            <!-- Agosto<br>2025 -->
                        </div>
                    </div>
                </div>
            </a>

            <!-- Consultoría Atlas de Riesgo -->
            <a href="{{ route('consultoria-atlas') }}">
                <div class="news" data-image="img/plataforma.jpeg">
                    <div class="news__content">
                        <h3 class="news__title">
                            Atlas de riesgos a la salud
                        </h3>
                        <p class="news__text">
                            Un atlas de riesgo es un sistema que reúne información sobre los fenómenos que pueden
                            afectar a una comunidad.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">Atlas</div>
                        <div class="news__month-year">
                            <!-- Agosto<br>2025 -->
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

@include('partials.learning')
@include('partials.contact-form')
@include('partials.address')
@endsection