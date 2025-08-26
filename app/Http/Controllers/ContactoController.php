<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ContactoPaginaWeb;


use DB;


class ContactoController extends Controller
{




    public function store(Request $request)
    {
        if ($request->filled('website')) {
            return response()->json(['success' => false, 'message' => 'Bot detectado (honeypot).'], 403);
        }

        $tJs = $request->input('token_js');
        $cookieOk = $request->hasCookie('contacto_token');
        if ($tJs !== '1' && !$cookieOk) {
            return response()->json(['success' => false, 'message' => 'Detección anti-bot (JS/cookie).'], 403);
        }

        $start = (int) $request->input('form_started_at', 0);
        $delta = time() - $start;
        if ($start === 0 || $delta < 3) {
            return response()->json(['success' => false, 'message' => 'Envío demasiado rápido.'], 403);
        }
        if ($delta > 7200) {
            return response()->json(['success' => false, 'message' => 'Formulario expirado, recarga la página.'], 419);
        }

        $request->validate([
            'NOMBRE'   => 'required|string|max:255',
            'CORREO'   => 'required|email:rfc,dns|max:255',
            'TELEFONO' => 'required|string|max:50',
            'MENSAJE'  => 'required|string|min:10|max:2000',
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


