<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viajero;

class ViajeroController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validación incluyendo la persona asociada
        $validatedData = $request->validate([
            'persona_id' => 'required|exists:personas,id', // Valida que la persona exista
            'destino' => 'required|string|max:100',
            'tipo_viaje' => 'nullable|string|max:50',
        ]);

        // 2. Inserción usando Eloquent ORM
        $viajero = Viajero::create($validatedData);

        // 3. Respuesta JSON estandarizada
        return response()->json([
            'mensaje' => 'Viajero asociado a la persona y registrado exitosamente',
            'data' => $viajero
        ], 201);
    }
}