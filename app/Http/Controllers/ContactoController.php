<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function show()
    {
        return view('pages.contact');
    }

    public function enviar(Request $request)
    {
        // Validación
        $request->validate([
            'nombre'   => 'required|string|max:50',
            'correo'   => 'required|email',
            'telefono' => 'required|digits:10',
            'mensaje'  => 'required|string|min:5',
        ]);

        // Aquí podrías guardar en la base de datos, enviar correo, etc.

        return back()->with('success', '¡Gracias por contactarnos! Pronto te responderemos.');
    }
}
