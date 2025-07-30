<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use App\Http\Controllers\ContactoController;


Route::post('/contactoSave', [ContactoController::class, 'store'])->name('contacto.store');


// Landing Page
Route::get('/', function () {
    return view('pages.index');
})->name('home');

// Landing Page
Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

// Acerca de (About Us)
Route::get('/acerca', function () {
    return view('pages.about');
})->name('about');

//SOLUCIONES TÉCNICAS
// Capacitaciones Soluciones técnicas
Route::get('/soluciones-tecnicas__capacitacion', function () {
    return view('pages.tecnicas.s-t__capacitacion');
})->name('s-t__capacitacion');

// curso Well Cotroll IADC
Route::get('/control-de-pozos-con-certificacion-iadc-wellsharp', function () {
    return view('pages.tecnicas.curso-wellcontrol-iadc');
})->name('curso-wellcontrol-iadc');

// curso Well Cotroll IWCF
Route::get('/control-de-pozos-con-certificacion-iwcf', function () {
    return view('pages.tecnicas.curso-wellcontrol-iwcf');
})->name('curso-wellcontrol-iwcf');

// curso Pega de tubería SSP
Route::get('/pega-de-tubería-ssp', function () {
    return view('pages.tecnicas.curso-ssp');
})->name('pega-de-tubería-ssp');


//SOLUCIONES EN SST
// Capacitaciones en SST
Route::get('/capacitaciones-sst', function () {
    return view('pages.sst.capacitaciones-sst');
})->name('capacitaciones-sst');

// Curso Primeros Auxilios
Route::get('/curso-primeros-auxilios', function () {
    return view('pages.sst.curso-primeros-auxilios');
})->name('curso-primeros-auxilios');

// Curso RigPass
Route::get('/curso-rigpass', function () {
    return view('pages.sst.curso-rigpass');
})->name('curso-rigpass');

//Consultoría en SST
Route::get('/consultoria-sst', function () {
    return view('pages.sst.consultoria-sst');
})->name('consultoria-sst');

//Consultoría Psicosociales
Route::get('/consultoria-psico', function () {
    return view('pages.sst.consultoria-psico');
})->name('consultoria-psico');

//Consultoría Atlas de Riesgos
Route::get('/consultoria-atlas', function () {
    return view('pages.sst.consultoria-atlas');
})->name('consultoria-atlas');

//PROYECTOS

Route::get('/projects', function () {
    return view('pages.proyectos.projects');
})->name('projects');

//Capacitación control de pozos
Route::get('/control-pozos', function () {
    return view('pages.proyectos.control-pozos');
})->name('control-pozos');

//PEMEX PEP
Route::get('/pemex-pep', function () {
    return view('pages.proyectos.pemex-pep');
})->name('pemex-pep');

//Cenegas
Route::get('/cenagas', function () {
    return view('pages.proyectos.cenagas');
})->name('cenagas');

//PEMEX TRI
Route::get('/pemex-tri', function () {
    return view('pages.proyectos.pemex-tri');
})->name('pemex-tri');



//  Flyer HazMat


Route::get('/Curso-HazMat', function () {
    return view('pages.sst.capacitacion-hazmat');
})->name('Curso-HazMat');


//  levantamineto de cargas

Route::get('/Curso-manejo-levantamiento-cargas', function () {
    return view('pages.sst.curso_levantamiento_cargas');
})->name('Curso-manejo-levantamiento-cargas');



Route::get('/clear-cache', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Application cache cleared';
});

