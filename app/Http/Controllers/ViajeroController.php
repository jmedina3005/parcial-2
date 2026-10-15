<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viajero;

class ViajeroController extends Controller
{
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'destino' => 'required|string|max:100',
            'tipo_viaje' => 'nullable|string|max:50',
        ]);

        
        $viajero = Viajero::create($validatedData);

        
        return response()->json([
            'mensaje' => 'Viajero registrado exitosamente',
            'data' => $viajero
        ], 201);
    }
}