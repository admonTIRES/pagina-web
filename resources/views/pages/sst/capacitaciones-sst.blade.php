@extends('layouts.base')
@section('content')

<div class="carouselNews carousel__news--negro">
    <div class="hola">
        <div class="carousel__news">
            <!-- Curso Primeros Auxilios con certificación Medic First Aid -->
            <a href="{{ route('Curso-HazMat') }}">
                <div class="news" data-image="archivosweb/Flyer_HazMat/imagen2.jpg">
                    <div class="news__content">
                        <h3 class="news__title">

                        Curso de HazMat                       
                         </h3>
                        <p class="news__text">
                          El manejo de materiales peligrosos tiene sus orígenes en el desarrollo industrial y químico,cuando comenzaron a utilizarse sustancias dañinas como metales pesados y ácidos..
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
                <div class="news" data-image="archivosweb/Rig_Pass/ExIm1.jpeg">
                    <div class="news__content">
                        <h3 class="news__title">

                       Orientación en HSE – IADC RigPass                      
                         </h3>
                        <p class="news__text">
                            El Rig Pass es una orientación en salud, seguridad en el trabajo y medio ambiente (HSE), relacionada con los trabajos…
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

               <a href="{{ route('Curso-manejo-levantamiento-cargas') }}">
                <div class="news" data-image="archivosweb/Levantamiento_Cargas/shutterstock_98497172.jpg">
                    <div class="news__content">
                        <h3 class="news__title">

                      Manejo y levantamiento de cargas                     
                         </h3>
                        <p class="news__text">
                    El Instituto Mexicano del Seguro Social (IMSS) reporta que las lesiones musculoesqueléticas son una causa importante de enfermedad de trabajo y afectan a una gran parte de la población trabajadora...                            </p>
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