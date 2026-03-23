@extends('layouts.base')
@section('content')



<style>
    .certification-table {
        display: table !important;
        width: 100% !important;
        border-collapse: collapse !important;
        table-layout: auto !important;
    }

    .certification-table__row {
        display: table-row !important;
    }

    .certification-table__cell {
        display: table-cell !important;
        vertical-align: middle !important;
        padding: 12px 8px !important;
        text-align: center !important;
        white-space: normal !important;
    }

    .certification-table__cell--left {
        text-align: left !important;
    }

    th.certification-table__cell {
        font-weight: bold !important;
        line-height: 1.2 !important;
    }
</style>





<div class="projects mt-5">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Control de pozos con certificación internacional IWCF</h1>
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
                        <button class="course-tabs__button" data-course="acreditacion">
                            <i class="fas fa-certificate"></i> Acreditación
                        </button>
                        <button class="course-tabs__button" data-course="perfil">
                            <i class="fas fa-user-graduate"></i> Perfil del estudiante
                        </button>

                        <!-- <button class="course-tabs__button" data-course="antecedentes" id="DESCARGAR_FLYER_IWCFC2" onclick="window.open('archivosweb/Flyer_certificación_IWCF/IWCF N2 Flyer RESULTS 190625.pdf', '_blank')">
                        <i class="fa-solid fa-download"></i>  Flyer Nivel 2
                        </button>

                        <button class="course-tabs__button" data-course="antecedentes" id="DESCARGAR_FLYER_IWCF34" onclick="window.open('archivosweb/Flyer_certificación_IWCF/IWCF N3-4 Flyer RESULTS 190625.pdf', '_blank')">
                        <i class="fa-solid fa-download"></i> Flyer Nivel 3-4
                        </button> -->


                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">
                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">

                            <p class="course-tabs__text">IWCF establece estándares de capacitación a través de una red
                                global
                                de sucursales y mantiene su compromiso de brindar un cambio en la seguridad de los
                                procesos y
                                las operaciones durante todo el ciclo de vida del pozo.
                            </p>



                            <table class="certification-table">
                                <thead>
                                    <tr class="certification-table__row certification-table__row--header">
                                        <th class="certification-table__cell">Nivel</th>
                                        <th class="certification-table__cell">Duración</th>
                                        <th class="certification-table__cell">P&P</th>
                                        <th class="certification-table__cell">Equipos</th>
                                        <th class="certification-table__cell">Examen práctico en el simulador</th>
                                        <th class="certification-table__cell">Invigilator</th>
                                        <th class="certification-table__cell">Vigencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="certification-table__row">
                                        <td class="certification-table__cell certification-table__cell--left">
                                            <span class="certification-table__cell--level">(2)</span>
                                            <span class="certification-table__cell--name">Introductorio</span>
                                        </td>
                                        <td class="certification-table__cell">24 horas</td>
                                        <td class="certification-table__cell">Sí (1.45 horas) + 25 mins extras</td>
                                        <td class="certification-table__cell">Sí (1.10 horas) + 25 mins extras</td>
                                        <td class="certification-table__cell">No</td>
                                        <td class="certification-table__cell">No</td>
                                        <td class="certification-table__cell certification-table__cell--validity">5 años</td>
                                    </tr>
                                    <tr class="certification-table__row certification-table__row--even">
                                        <td class="certification-table__cell certification-table__cell--left">
                                            <span class="certification-table__cell--level">(3)</span>
                                            <span class="certification-table__cell--name">Perforador</span>
                                        </td>
                                        <td class="certification-table__cell">40 horas</td>
                                        <td class="certification-table__cell">Sí (1.45 horas) + 25 mins extras</td>
                                        <td class="certification-table__cell">Sí (1.10 horas) + 25 mins extras</td>
                                        <td class="certification-table__cell">Sí</td>
                                        <td class="certification-table__cell">Sí</td>
                                        <td class="certification-table__cell certification-table__cell--validity">2 años</td>
                                    </tr>
                                    <tr class="certification-table__row">
                                        <td class="certification-table__cell certification-table__cell--left">
                                            <span class="certification-table__cell--level">(4)</span>
                                            <span class="certification-table__cell--name">Supervisor</span>
                                        </td>
                                        <td class="certification-table__cell">40 horas</td>
                                        <td class="certification-table__cell">Sí (2.45 horas) + 25 mins extras</td>
                                        <td class="certification-table__cell">Sí (1.10 horas) + 25 mins extras</td>
                                        <td class="certification-table__cell">Sí</td>
                                        <td class="certification-table__cell">Sí</td>
                                        <td class="certification-table__cell certification-table__cell--validity">2 años</td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">Nivel 2 </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Conceptos de control de pozos</li>
                                <li class="course-tabs__list-item">Presión de formación</li>
                                <li class="course-tabs__list-item">Control de la presión de formación</li>
                                <li class="course-tabs__list-item">Causas de los influjos </li>
                                <li class="course-tabs__list-item">Señales de advertencia e indicadores de influjos </li>
                                <li class="course-tabs__list-item">Procedimiento de cierre </li>
                                <li class="course-tabs__list-item">Métodos de control de pozos </li>
                                <li class="course-tabs__list-item">Control de pozos durante operaciones de revestimiento y cementación </li>
                                <li class="course-tabs__list-item">Equipo de control de pozos </li>
                                <li class="course-tabs__list-item">Control de pozos submarino </li>
                            </ul>
                            <br>
                            <p class="course-tabs__text">Examen teórico (en línea) supervisado por Invigilator, que incluye dos exámenes: Principios y procedimientos / Equipos.<br>
                                No aplica examen práctico en simuladores de control de pozos.
                            </p>
                            <br>
                            <p class="course-tabs__text">Nivel 3 y 4 </p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Introducción al control de pozos</li>
                                <li class="course-tabs__list-item">Manejo de la presión de fondo</li>
                                <li class="course-tabs__list-item">Control de la presión de formación</li>
                                <li class="course-tabs__list-item">Causas de los influjos </li>
                                <li class="course-tabs__list-item">Señales de advertencia e indicadores de influjos</li>
                                <li class="course-tabs__list-item">Cierre del pozo ante un influjo</li>
                                <li class="course-tabs__list-item">Sistema de circulación</li>
                                <li class="course-tabs__list-item">Características y comportamiento de un influjo </li>
                                <li class="course-tabs__list-item">Procedimiento de cierre</li>
                                <li class="course-tabs__list-item">Métodos de control de pozos</li>
                                <li class="course-tabs__list-item">Control de pozos durante operaciones de revestimiento y cementación</li>
                                <li class="course-tabs__list-item">Planeación de contingencias y gestión de control de pozos</li>
                                <li class="course-tabs__list-item">Equipos de control de pozos</li>
                                <li class="course-tabs__list-item">Control de pozos submarino (Preventor submarino para la certificación Subsea)</li>
                                <li class="course-tabs__list-item">Prácticas con simuladores</li>
                                <br>
                                <p class="course-tabs__text">
                                    Examen teórico (en línea) supervisado por Invigilator, que incluye dos exámenes: Principios y procedimientos / Equipos.<br> Examen práctico con simulador.
                                </p>

                            </ul>

                        </div>

                        <!-- Acreditación -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">
                                Las personas que aprueben el curso reciben una e-card del programa IWCF-Drilling Well
                                Control, nivel tres o cuatro, con una vigencia de 2 años a partir de la fecha del examen. Se
                                entrega inicialmente un certificado temporal con una vigencia de 2 meses y posteriormente se
                                entrega la e-card permanente.<br><br>
                                Los exámenes se aprueban por separado obteniendo un puntaje mínimo
                                de 70/100% en cada uno.<br><br>
                                El curso se certifica a través de Smith Mason & Co, centro de entrenamiento acreditado
                                por IWCF.<br><br>
                                Results como centro asociado cuenta con salón de clases aprobado por IWCF en Villahermosa
                            </p>


                            <img src="archivosweb/Flyer_certificación_IWCF/555.png" alt="" style="width: 100%; height: auto; max-width: 500px; display: block; margin: 20px auto;" />

                            <br>
                        </div>

                        <!-- Perfil del estudiante -->
                        <div class="course-tabs__section" data-content="perfil">
                            <p class="course-tabs__text">Para los niveles 3 y 4 se recomienda al estudiante:</p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Haber aprobado un curso introductorio (nivel 2)</li>
                                <li class="course-tabs__list-item">Habilidades de lecto-escritura</li>
                                <li class="course-tabs__list-item">Operaciones matemáticas básicas</li>
                                <li class="course-tabs__list-item">Uso de la calculadora</li>
                            </ul>
                            <br>
                            <p>Nota: El participante debe presentar la identificación oficial con foto vigente con la
                                que se hizo
                                su registro, para comprobar su identidad. En caso de presentar pasaporte, debe tener una
                                vigencia
                                de 2 años previo a la fecha del examen.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Incluir Font Awesome para los iconos -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


        </div>
    </div>

    <div class="projects__image-container">
        <img src="archivosweb/Flyer_certificación_IWCF/IWCF.jpg" alt="Gato" class="projects__image">
    </div>
</div>
@endsection