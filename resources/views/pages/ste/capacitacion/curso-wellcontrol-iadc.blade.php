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
        padding: 12px 10px !important;
        text-align: center !important;
        white-space: normal !important;
        border-bottom: 1px solid #eee !important;
    }

    .certification-table__cell--left {
        text-align: left !important;
    }

    .certification-table__cell--validity {
        color: #f05454 !important;
        font-weight: bold !important;
    }

    .certification-table__row--complement {
        background-color: #f2c9bc !important;
    }

    th.certification-table__cell {
        background-color: #f05454 !important;
        color: white !important;
        font-weight: bold !important;
        text-transform: uppercase !important;
        font-size: 13px !important;
    }
</style>



<div class="projects">
    <div class="projects__content">
        <div class="projects__info ">
            <h1 class="projects__title">Control de pozos con certificación IADC-WellSharp</h1>
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

                        <!-- <button class="course-tabs__button" data-course="antecedentes" id="DESCARGAR_FLYER_IADC2" onclick="window.open('archivosweb/Flyer_certificación_IADC/IADC L2 Flyer RESULTS 190625.pdf', '_blank')">
                        <i class="fa-solid fa-download"></i>  Flyer Nivel 2
                        </button>

                        <button class="course-tabs__button" data-course="antecedentes"  id="DESCARGAR_FLYER_IADC34" onclick="window.open('archivosweb/Flyer_certificación_IADC/IADC D L3-4 Flyer RESULTS 190625.pdf', '_blank')">
                        <i class="fa-solid fa-download"></i> Flyer Nivel 3-4
                        </button> -->
                    </nav>

                    <!-- Contenido de cada sección -->
                    <div class="course-tabs__content">

                        <!-- Antecedentes del Curso -->
                        <div class="course-tabs__section course-tabs__section--active" data-content="antecedentes">
                            <p class="course-tabs__text">Este programa de certificación hace énfasis en el entrenamiento
                                riguroso para el personal con responsabilidades en el control de pozos, logrando
                                desarrollar
                                competencias (conocimientos y habilidades específicas) para cada categoría.
                            </p>


                            <table class="certification-table">
                                <thead>
                                    <tr class="certification-table__row certification-table__row--header">
                                        <th class="certification-table__cell">Nivel</th>
                                        <th class="certification-table__cell">Duración</th>
                                        <th class="certification-table__cell">Examen teórico en línea (duración)</th>
                                        <th class="certification-table__cell">Examen práctico en el simulador</th>
                                        <th class="certification-table__cell">Proctor</th>
                                        <th class="certification-table__cell">Vigencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="certification-table__row">
                                        <td class="certification-table__cell certification-table__cell--left">
                                            <span class="certification-table__cell--level">(2)</span>
                                            <span class="certification-table__cell--name">Introductorio</span>
                                        </td>
                                        <td class="certification-table__cell">16 horas</td>
                                        <td class="certification-table__cell">Sí (1 hora)</td>
                                        <td class="certification-table__cell">No </td>
                                        <td class="certification-table__cell">No</td>
                                        <td class="certification-table__cell certification-table__cell--validity">5 años</td>
                                    </tr>
                                    <tr class="certification-table__row certification-table__row--even">
                                        <td class="certification-table__cell certification-table__cell--left">
                                            <span class="certification-table__cell--level">(3)</span>
                                            <span class="certification-table__cell--name">Perforador</span>
                                        </td>
                                        <td class="certification-table__cell">32 horas</td>
                                        <td class="certification-table__cell">Sí (2 horas)</td>
                                        <td class="certification-table__cell">Sí</td>
                                        <td class="certification-table__cell">Sí</td>
                                        <td class="certification-table__cell certification-table__cell--validity">2 años</td>
                                    </tr>
                                    <tr class="certification-table__row">
                                        <td class="certification-table__cell certification-table__cell--left">
                                            <span class="certification-table__cell--level">(4)</span>
                                            <span class="certification-table__cell--name">Supervisor</span>
                                        </td>
                                        <td class="certification-table__cell">32 horas</td>
                                        <td class="certification-table__cell">Sí (3 horas)</td>
                                        <td class="certification-table__cell">Sí</td>
                                        <td class="certification-table__cell">Sí</td>
                                        <td class="certification-table__cell certification-table__cell--validity">2 años</td>
                                    </tr>
                                    <tr class="certification-table__row certification-table__row--complement">
                                        <td class="certification-table__cell certification-table__cell--left">
                                            <span class="certification-table__cell--name">Complemento de Workover <br> (unido al nivel 3 o 4)</span>
                                        </td>
                                        <td class="certification-table__cell">8 horas</td>
                                        <td class="certification-table__cell">Sí (1 hora)</td>
                                        <td class="certification-table__cell">No</td>
                                        <td class="certification-table__cell">Sí</td>
                                        <td class="certification-table__cell certification-table__cell--validity">2 años</td>
                                    </tr>
                                </tbody>
                            </table>




                        </div>

                        <!-- Temario -->
                        <div class="course-tabs__section" data-content="temario">
                            <p class="course-tabs__text">Nivel 2</p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Conceptos de control de pozos</li>
                                <li class="course-tabs__list-item">Control de lodo y pozos</li>
                                <li class="course-tabs__list-item">Cálculos de control de pozos </li>
                                <li class="course-tabs__list-item">Equipo de control de pozos</li>
                                <li class="course-tabs__list-item">Control de riesgos</li>
                                <li class="course-tabs__list-item">Causas de los influjos</li>
                                <li class="course-tabs__list-item">Métodos de control de pozos</li>
                            </ul>
                            <br>
                            <p class="course-tabs__text">Examen teórico (en línea) supervisado por un Proctor. <br>
                                No aplica examen práctico en simuladores de control de pozos.
                            </p>

                            <br>
                            <p class="course-tabs__text">Nivel 3 y 4</p>
                            <ul class="course-tabs__list">
                                <li class="course-tabs__list-item">Generalidades de control de pozos</li>
                                <li class="course-tabs__list-item">Presión de fondo </li>
                                <li class="course-tabs__list-item">Temas avanzados en LWD/PWD y características UBD/MPD</li>
                                <li class="course-tabs__list-item">Causas de los influjos</li>
                                <li class="course-tabs__list-item">Señales de advertencia de los influjos</li>
                                <li class="course-tabs__list-item">Procedimientos de cierre</li>
                                <li class="course-tabs__list-item">Métodos para controlar (matar) el pozo</li>
                                <li class="course-tabs__list-item">Métodos de control de pozos sin circulación</li>
                                <li class="course-tabs__list-item">Problemas al circular un influjo</li>
                                <li class="course-tabs__list-item">Equipo de control de pozos</li>
                                <li class="course-tabs__list-item">Problemas con preventor submarino (para la certificación Subsea)</li>
                                <li class="course-tabs__list-item">Prácticas con simuladores</li>
                            </ul>
                            <br>
                            <p class="course-tabs__text">Examen práctico con simulador.<br>
                                Examen teórico (en línea) supervisado por Proctor.
                            </p>

                        </div>

                        <!-- Acreditación -->
                        <div class="course-tabs__section" data-content="acreditacion">
                            <p class="course-tabs__text">Las personas que aprueben el curso reciben un certificado y
                                credencial
                                de IADC-WellSharp, nivel perforador o supervisor, con una vigencia de 2 años a partir de
                                la fecha
                                del examen. Los exámenes se aprueban por separado obteniendo un puntaje mínimo de
                                75/100% en cada uno.
                                <br><br>
                                El curso se certifica a través de Smith Mason & Co, centro de entrenamiento acreditado
                                por IADC.
                            </p>

                            <img src="archivosweb/Flyer_certificación_IADC/IADC-WellSharp.png" alt="" style="width: 100%; height: auto; max-width: 500px; display: block; margin: 20px auto;" />

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
                        </div>
                    </div>
                </div>
            </div>


            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


        </div>
    </div>
    <div class="projects__image-container">
        <img src="img/simulador.jpg" alt="Gato" class="projects__image">


    </div>
</div>
@endsection