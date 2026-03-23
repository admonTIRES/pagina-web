@extends('layouts.base')
@section('content')


<style>
    .carousel__news {
        display: flex !important;
        flex-direction: row !important;
        align-items: stretch !important;
        gap: 20px !important;
        overflow-x: auto !important;
    }

    .carousel__news a {
        display: flex !important;
        text-decoration: none !important;
        flex: 0 0 350px !important;
    }


    .news {
        display: flex !important;
        flex-direction: column !important;
        width: 100% !important;
        min-height: 500px !important;
        height: 100% !important;
        background-color: white;

    }


    .news__content {
        flex: 1 0 auto !important;
        display: flex !important;
        flex-direction: column !important;
    }

    .news__footer {
        margin-top: auto !important;
    }
</style>



<div class="carouselNews carousel__news--negro">
    <div class="hola">
        <div class="carousel__news">

            <!-- Consultoría Psicosociales -->
            <a href="{{ url('/consultoria-psico') }}">
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
            <!-- <a href="{{ url('/consultoria-atlas') }}">
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
                        </div>
                    </div>
                </div>
            </a> -->
        </div>

        <div class="carousel__nav">
            <button class="carousel__button carousel__button--prev">&#10094;</button>
            <button class="carousel__button carousel__button--next">&#10095;</button>
        </div>
    </div>
</div>



@endsection