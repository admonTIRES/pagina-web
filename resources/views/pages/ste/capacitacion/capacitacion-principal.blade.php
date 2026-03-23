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
            <!-- Curso WellControl IADC -->
            <a href="{{ url('/control-de-pozos-iadc') }}">
                <div class="news" data-image="img/simulador.jpg">
                    <div class="news__content">
                        <h3 class="news__title">
                            Control de pozos con certificación IADC-WellSharp
                        </h3>
                        <p class="news__text">
                            Control de pozos con certificación internacional IADC-WellSharp en convenio con Smith Mason
                            & Co.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">

                    </div>
                </div>
            </a>

            <!-- Curso WellControl IWCF -->
            <a href="{{ url('/control-de-pozos-iwcf') }}">
                <div class="news" data-image="archivosweb/Flyer_certificación_IWCF/IWCF.jpg">
                    <div class="news__content">
                        <h3 class="news__title">Control de pozos con certificación internacional IWCF</h3>
                        <p class="news__text">
                            Control de pozos con certificación internacional IWCF Drilling Well Control Program en
                            convenio con Smith Mason & Co.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">

                    </div>
                </div>
            </a>

            <!-- Curso Prevención de Pega de Tubería SSP -->
            <a href="{{ url('/pega-de-tubería-ssp') }}">
                <div class="news" data-image="archivosweb/Pega_tuberias/SPP.jpg">
                    <div class="news__content">
                        <h3 class="news__title">Prevención de pega de tubería (SSP)</h3>
                        <p class="news__text">
                            La pega de tubería es la causa principal del tiempo no productivo y no debe considerarse
                            como un peligro inevitable.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">

                    </div>
                </div>
            </a>

            <a href="{{ url('/Curso-RigInspection') }}">
                <!-- <div class="news" data-image="archivosweb/Pega_tuberias/SPP.jpg"> -->
                <div class="news">

                    <div class="news__content">
                        <h3 class="news__title">Curso Rig Inspection </h3>
                        <p class="news__text">
                            En la industria de perforación, un equipo de perforación en óptimas condiciones no es un lujo, es la diferencia entre operaciones rentables y pérdidas considerables por tiempos no productivos, accidentes o multas regulatorias.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">

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