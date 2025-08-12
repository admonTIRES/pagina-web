<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactoPaginaWeb;


use DB;


class ContactoController extends Controller
{
    //


    // public function store(Request $request)
    // {
    //     $registro = ContactoPaginaWeb::create([
    //         'NOMBRE' => $request->NOMBRE,
    //         'CORREO' => $request->CORREO,
    //         'TELEFONO' => $request->TELEFONO,
    //         'MENSAJE' => $request->MENSAJE,
    //     ]);

    //     return response()->json([
    //         'success' => true,
    //         'area' => [
    //             'ID_FORMULARIO_CONTACTOSPAGINAWEB' => $registro->ID_FORMULARIO_CONTACTOSPAGINAWEB ?? $registro->id ?? null
    //         ]
    //     ]);
    // }

    public function store(Request $request)
    {
        if ($request->filled('website')) {
            return response()->json([
                'success' => false,
                'message' => 'Bot detectado. Envío rechazado.'
            ], 403);
        }

        $request->validate([
            'NOMBRE'   => 'required|string|max:255',
            'CORREO'   => 'required|email|max:255',
            'TELEFONO' => 'required|string|max:50',
            'MENSAJE'  => 'required|string|max:1000',
        ]);

        $registro = ContactoPaginaWeb::create([
            'NOMBRE'   => $request->NOMBRE,
            'CORREO'   => $request->CORREO,
            'TELEFONO' => $request->TELEFONO,
            'MENSAJE'  => $request->MENSAJE,
        ]);

        return response()->json([
            'success' => true,
            'area' => [
                'ID_FORMULARIO_CONTACTOSPAGINAWEB' => $registro->ID_FORMULARIO_CONTACTOSPAGINAWEB ?? $registro->id ?? null
            ]
        ]);
    }

}