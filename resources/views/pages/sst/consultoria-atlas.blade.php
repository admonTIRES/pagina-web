@extends('layouts.base')
@section('content')

<div class="projects">

    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Atlas de riesgos a la salud</h1>
            <div class="course-tabs">

                <div class="course-tabs__container">
                    <!-- Botones de navegación -->
                    <nav class="course-tabs__nav">
                        <button class="course-tabs__button course-tabs__button--active" data-course="antecedentes">
                            <i class="fas fa-book"></i> Antecedentes
                        </button>
                        <button class="course-tabs__button" data-course="temario">
                            <i class="fas fa-list-ul"></i> Soluciones
                        </button>
                        <button class="course-tabs__button" data-course="acreditacion">
                            <i class="fas fa-certificate"></i> Dirigido a
                        </button>
                        <button class="course-tabs__button" data-course="perfil">
                            <i class="fas fa-user-graduate"></i> Infografía
                        </button>
                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">
                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">

                            <p class="course-tabs__text">
                                De acuerdo con la Organización Internacional del Trabajo (OIT), cada día mueren 6,300
                                personas por accidentes o enfermedades relacionadas con el trabajo y cada 15 segundos un
                                trabajador muere a causa de accidentes o enfermedades de origen laboral. Según los datos
                                del INEGI, en
                                México la población económicamente activa supera los 61.4 millones, quienes pasan
                                alrededor de un
                                tercio de su tiempo en los centros de trabajo, lo que puede ocasionar riesgos
                                ocupacionales y el
                                desarrollo de enfermedades laborales crónicas, por ejemplo: pérdida de la audición,
                                enfermedades
                                pulmonares, asma, traumatismos, ciertos tipos de cáncer, entre otros problemas de salud.
                                Por lo
                                anterior, es de suma importancia contar con condiciones de trabajo adecuadas, para
                                beneficiar la
                                protección social, favorecer las oportunidades de desarrollo personal y proteger a los
                                colaboradores contra
                                los factores y agentes de riesgos físicos, químicos y biológicos, contribuyendo a
                                generar efectos
                                positivos sobre su salud y el bienestar organizacional. <br><br>Es por ello que, Results
                                In Performance
                                ofrece soluciones integrales y adaptadas a sus necesidades, para la identificación y
                                evaluación de los
                                riesgos de higiene industrial aplicables y relacionados con los agentes físicos,
                                químicos, biológicos, así
                                como los factores de riesgo ergonómico y factores de riesgo psicosocial, mediante la
                                elaboración de un
                                Atlas de Riesgos a la Salud (ARS), que es una herramienta poderosa de seguridad y salud
                                en el trabajo
                                para la gestión de los riesgos en los centros de trabajo y para la implementación de
                                programas de
                                vigilancia a la salud de los colaboradores.
                            </p>
                        </div>

                        <!-- Soluciones -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">
                                Algunas de nuestras soluciones que se pueden incluir para elaborar un Atlas de Riesgo a
                                la Salud (ARS), las cuales cumplen con las Normas Oficiales Mexicanas (NOM´S) y/o con
                                otros estándares
                                internacionales:
                            </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Visita de reconocimiento sensorial.</li>
                                <li class="course-tabs__list-item">Reconocimiento de los agentes químicos contaminantes
                                    del ambiente laboral, de acuerdo con el capítulo 9 de la NOM-010-STPS-2014.</li>
                                <li class="course-tabs__list-item">Evaluación de los agentes físicos (iluminación,
                                    ruido, vibraciones, temperaturas elevadas o abatidas, radiaciones ionizantes,
                                    radiaciones no ionizantes) en el ambiente laboral de los centros de trabajo.</li>
                                <li class="course-tabs__list-item">Evaluación de los agentes químicos contaminantes
                                    presentes en el ambiente laboral de los centros de trabajo.</li>
                                <li class="course-tabs__list-item">Evaluación de los agentes biológicos (hielo y agua
                                    para consumo humano, alimentos) en los centros de trabajo.</li>
                                <li class="course-tabs__list-item">Evaluación de la ventilación y calidad del aire
                                    interior en los centros de trabajo.</li>
                                <li class="course-tabs__list-item">Evaluación de los factores de riesgo ergonómicos de
                                    acuerdo con la NOM-036-1-STPS-2018 para el levantamiento manual de cargas y otras
                                    metodologías validadas internacionalmente.</li>
                                <li class="course-tabs__list-item">Evaluación de los factores de riesgo psicosocial de
                                    acuerdo con la NOM-035-STPS-2018 en los centros de trabajo.</li>
                                <li class="course-tabs__list-item">Evaluación de la infraestructura para los servicios
                                    al personal.</li>
                                <li class="course-tabs__list-item">Evaluación de los índices biológicos de exposición a
                                    sustancias químicas (BEI´S) en los trabajadores expuestos en el ambiente laboral.
                                </li>
                                <li class="course-tabs__list-item">Protección ambiental</li>
                            </ul>

                            <p class="course-tabs__text">
                                Nota: Los ARS se deben actualizar cada 2 años o cuando cambien las condiciones
                                operativas del centro de trabajo, lo cual viene definido en cada una de las NOM'S.
                            </p>
                        </div>

                        <!-- Dirigido a -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">
                                Todas las empresas que identifiquen riesgos de higiene industrial en sus procesos y/o
                                actividades operativas
                                los cuales requieren ser evaluados, cuantificados y controlados para proteger la salud
                                de los colaboradores.
                            </p>
                        </div>

                        <!-- Infografía -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Incluir Font Awesome para los iconos -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

            <time class="projects__date">Experiencia del curso</time>

            <div class="projects__gallery">
                <!-- Prueba-->
                <div class="item" data-title="Dog" data-secondary="">
                    <img class="projects__thumbnail" src="img/simulador.jpg" alt="" />
                </div>

                <div class="item" data-title="Dog" data-secondary="">
                    <img class="projects__thumbnail" src="img/simulador.jpg" alt="" />
                </div>

                <!-- <div class="item" data-title="Owl" data-secondary="">
                    <img class="projects__thumbnail" src="img/simulador.jpg" alt="" />
                </div> -->
            </div>

            <!-- Prueba-->
            <div class="detail"></div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        </div>

        
    </div>
    <div class="projects__image-container">
        <img src="img/simulador.jpg" alt="Gato" class="projects__image">
    </div>
</div>
@endsection