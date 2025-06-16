@extends('layouts.base')
@section('content')

<div class="carouselNews carousel__news--negro">
    <div class="hola">
        <div class="carousel__news">
            <!-- Curso WellControl IADC -->
            <a href="{{ route('curso-wellcontrol-iadc') }}">
                <div class="news" data-image="img/plataforma.jpeg">
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
                        <div class="news__date">IADC</div>
                        <div class="news__month-year">
                            Agosto<br>2025
                        </div>
                    </div>
                </div>
            </a>

            <!-- Curso WellControl IWCF -->
            <a href="{{ route('curso-wellcontrol-iwcf') }}">
                <div class="news" data-image="img/plataforma.jpeg">
                    <div class="news__content">
                        <h3 class="news__title">Control de pozos con certificación internacional IWCF</h3>
                        <p class="news__text">
                            Control de pozos con certificación internacional IWCF Drilling Well Control Program en
                            convenio con Smith Mason & Co.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">IWCF</div>
                        <div class="news__month-year">
                            Agosto<br>2025
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