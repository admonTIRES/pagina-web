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


// Route::post('/contactoSave', [ContactoController::class, 'store'])->name('contacto.store');




Route::post('/contactoSave', [ContactoController::class, 'store'])
    ->name('contacto.store')
    ->middleware('throttle:5,1'); 

// Landing Page
Route::get('/', function () {return view('pages.index');});

// Landing Page
Route::get('/about-us', function () {return view('pages.about-us');})->name('about-us');

// Acerca de (About Us)
Route::get('/acerca', function () { return view('pages.about');})->name('about');




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////Soluciones Técnicas//////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////// Capacitación ////////
Route::get('/capacitacion-ste', function () { return view('pages.ste.capacitacion.capacitacion-principal');});

// curso Well Cotroll IADC
Route::get('/control-de-pozos-iadc', function () { return view('pages.ste.capacitacion.curso-wellcontrol-iadc'); });

// curso Well Cotroll IWCF
Route::get('/control-de-pozos-iwcf', function () { return view('pages.ste.capacitacion.curso-wellcontrol-iwcf');});

// curso Pega de tubería SSP
Route::get('/pega-de-tubería-ssp', function () { return view('pages.ste.capacitacion.curso-ssp');});

// curso Rig inspection
Route::get('/Curso-RigInspection', function () { return view('pages.ste.capacitacion.curso-riginspection');});



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////Soluciones STT //////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////// Capacitación ///////

Route::get('/capacitacion-sst', function () { return view('pages.sst.capacitacion.capacitaciones-principal');});

// Curso Primeros Auxilios
Route::get('/curso-primeros-auxilios', function () {return view('pages.sst.curso-primeros-auxilios');});

// Curso RigPass
Route::get('/Curso-RigPass', function () { return view('pages.sst.capacitacion.curso-rigpass');});

// HazMat
Route::get('/Curso-HazMat', function () {return view('pages.sst.capacitacion.curso-hazmat');});

//  levantamineto de cargas
Route::get('/Curso-manejo-levantamiento-cargas', function () { return view('pages.sst.capacitacion.curso_levantamiento_cargas');});



/////// Consultoría ///////
Route::get('/consultoria-sst', function () {return view('pages.sst.consultoria.consultoria-principal');});

//Consultoría Psicosociales
Route::get('/consultoria-psico', function () {return view('pages.sst.consultoria.consultoria-psico');});

//Consultoría Atlas de Riesgos
Route::get('/consultoria-atlas', function () { return view('pages.sst.consultoria.consultoria-atlas');});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////Soluciones de Liderazgo y Hab. Humanas///////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/capacitacion-slh', function () {return view('pages.slh.capacitacion.capacitacion-principal');});


Route::get('/Curso-RigManagement', function () {return view('pages.slh.capacitacion.curso-rigmanagment');});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////// Proyectos //////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/projects', function () { return view('pages.proyectos.projects');});

//Capacitación control de pozos
Route::get('/control-pozos', function () { return view('pages.proyectos.control-pozos');});

//PEMEX PEP
Route::get('/pemex-pep', function () {return view('pages.proyectos.pemex-pep');});

//Cenegas
Route::get('/cenagas', function () {return view('pages.proyectos.cenagas');});

//PEMEX TRI
Route::get('/pemex-tri', function () { return view('pages.proyectos.pemex-tri');});







Route::get('/clear-cache', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Application cache cleared';
});

