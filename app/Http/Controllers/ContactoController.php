<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactoPaginaWeb;


use DB;


class ContactoController extends Controller
{
    //


    public function store(Request $request)
    {
        $registro = ContactoPaginaWeb::create([
            'NOMBRE' => $request->NOMBRE,
            'CORREO' => $request->CORREO,
            'TELEFONO' => $request->TELEFONO,
            'MENSAJE' => $request->MENSAJE,
        ]);

        return response()->json([
            'success' => true,
            'area' => [
                'ID_FORMULARIO_CONTACTOSPAGINAWEB' => $registro->ID_FORMULARIO_CONTACTOSPAGINAWEB ?? $registro->id ?? null
            ]
        ]);
    }
}