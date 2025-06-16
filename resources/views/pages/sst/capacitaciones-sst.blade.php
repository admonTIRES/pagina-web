@extends('layouts.base')
@section('content')

<div class="carouselNews carousel__news--negro">
    <div class="hola">
        <div class="carousel__news">
            <!-- Curso Primeros Auxilios con certificación Medic First Aid -->
            <a href="{{ route('curso-primeros-auxilios') }}">
                <div class="news" data-image="img/plataforma.jpeg">
                    <div class="news__content">
                        <h3 class="news__title">
                            Primeros Auxilios con certificación Medic First Aid
                        </h3>
                        <p class="news__text">
                            Desde 1978, los programas de capacitación de Medic First Aid (MFA) han sido
                            utilizados para enseñar y certificar a los proveedores de primeros auxilios en
                            una variedad de organizaciones e industrias de diferentes sectores económicos.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">MFA</div>
                        <div class="news__month-year">
                            Agosto<br>2025
                        </div>
                    </div>
                </div>
            </a>

            <!-- Curso Orientación en HSE – IADC RigPass -->
            <a href="{{ route('curso-rigpass') }}">
                <div class="news" data-image="img/plataforma.jpeg">
                    <div class="news__content">
                        <h3 class="news__title">Orientación en HSE – IADC RigPass</h3>
                        <p class="news__text">
                            El Rig Pass es una orientación en salud, seguridad en el trabajo y medio ambiente (HSE),
                            relacionada con los trabajos de perforación terrestre y costa afuera, que se brinda a todo
                            el personal antes de iniciar sus labores con el fin de facilitar su desempeño en el trabajo
                            y evitar situaciones riesgosas lamentables al fomentar prácticas seguras de trabajo.
                        </p>
                    </div>
                    <div class="news__divider"></div>
                    <div class="news__footer">
                        <div class="news__date">RigPass</div>
                        <div class="news__month-year">
                            Agosto<br>2025
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