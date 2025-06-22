@extends('layouts.base')
@section('content')

<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Manejo y levantamiento de cargas </h1>
            <div class="course-tabs">

                <div class="course-tabs__container">
                    <!-- Botones de navegación -->
                    <nav class="course-tabs__nav">
                        <button class="course-tabs__button course-tabs__button--active" data-course="antecedentes">
                            <i class="fas fa-book"></i> Antecedentes del Curso
                        </button>
                        <button class="course-tabs__button" data-course="temario">
                            <i class="fas fa-list-ul"></i> Temario
                        </button>
                        <button class="course-tabs__button" data-course="perfil">
                            <i class="fas fa-user-graduate"></i> Dirigido :
                        </button>
                       <button class="course-tabs__button" data-course="temario" id="DESCARGAR_FLYER_LEVANTAMIENTO_CARGAS" onclick="window.open('archivosweb/Levantamiento_Cargas/Flyer de LMC Capacitación.pdf', '_blank')">
                       <i class="fa-solid fa-download"></i> Descargar Flyer
                    </button>


                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">
                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">

                            <p class="course-tabs__text">
                               El Instituto Mexicano del Seguro Social (IMSS) reporta que las lesiones musculoesqueléticas son una causa importante de enfermedad de trabajo y afectan a una gran parte de la población trabajadora. La dorsopatía, afección de la región dorsal de la columna vertebral, que corresponde a la parte media de la espalda, entre la zona cervical (cuello) y la zona lumbar (parte baja de la espalda), son un ejemplo común de estas lesiones, y muchas veces están relacionadas con la ergonomía del puesto de trabajo. Además, se ha observado que las lesiones en manos
                                y tobillos son frecuentes, y el grupo de edad entre 20 y 40 años es el más propenso a accidentes laborales. 
                                <br><br>
                                En el levantamiento de cargas encontramos la fortaleza no solo en los músculos, sino también en la conciencia de practicar hábitos seguros en cada acción. Este curso nos permite ayudar a los participantes a identificar los factores de riesgo que se derivan del manejo y levantamiento de las cargas,
                                 así como desarrollar las medidas preventivas para la mitigación de los riesgos asociados a esta actividad, adoptando prácticas seguras y protegiendo su salud mientras realizan los trabajos a través de técnicas y/o equipos auxiliares.
                                
                            </p>
                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">
                            El curso tiene una duración total de 6 horas y está diseñado para brindar conocimientos esenciales sobre ergonomía.    
                            <br><br>
                             Algunos de los temas incluidos:
                            </p>
                            <ul class="course-tabs__list">
                               <li class="course-tabs__list-item">Conceptos y definiciones</li>
                                <li class="course-tabs__list-item">Marco legal y normativo</li>
                                <li class="course-tabs__list-item">Antecedentes de lesiones relacionadas con el manejo manual de cargas</li>
                                <li class="course-tabs__list-item">Características de la carga</li>
                                <li class="course-tabs__list-item">Levantamiento manual de cargas</li>
                                <li class="course-tabs__list-item">Manejo de cargas entre 2 personas</li>
                                <li class="course-tabs__list-item">Manejo y levantamiento de cargas con mecanismos auxiliares</li>
                            </ul>
                            <br><br>
                             <p class="course-tabs__text">
                            Al finalizar este curso, los participantes estarán en capacidad de:    
                            </p>
                              <ul class="course-tabs__list">
                              <li class="course-tabs__list-item">Emplear técnicas ergonómicas para levantar, transportar, bajar, empujar, halar, rodar y girar cargas.</li>
                              <li class="course-tabs__list-item">Implementar medidas preventivas para el manejo y levantamiento de cargas seguro.</li>
                              <li class="course-tabs__list-item">Conocer las lesiones más frecuentes en el manejo y levantamiento manual de cargas.</li>
                            </ul>
                            <br><br>
                              <p class="course-tabs__text">
                                Las personas que aprueben el curso reciben una constancia de participación y la constancia de competencias y/o habilidades laborales DC-3.
                            </p>
                        </div>

                        

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">
                        El curso está dirigido a personal interesado en la salud ocupacional, es ideal para quienes buscan identificar riesgos ergonómicos y aplicar mejoras en su entorno laboral.                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Incluir Font Awesome para los iconos -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

            <time class="projects__date"></time>

          
            <!-- Prueba-->
            <div class="detail"></div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        </div>

        
    </div>
    <div class="projects__image-container">
        <img src="archivosweb/Levantamiento_Cargas/shutterstock_396430681.jpg" alt="Gato" class="projects__image">
    </div>
</div>
@endsection