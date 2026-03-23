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


            <!-- curso Rig Management  -->

            <a href="{{ url('/Curso-RigManagement') }}">
                <!-- <div class="news" data-image="archivosweb/Rig_Pass/ExIm1.jpeg"> -->
                <div class="news">
                    <div class="news__content">
                        <h3 class="news__title">
                            Curso Rig Management
                        </h3>
                        <p class="news__text">
                            En la industria de perforación de pozos, los líderes del equipo y la cuadrilla en campo son responsables de la seguridad total...
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date"></div>
                        <div class="news__month-year">
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