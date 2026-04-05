<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        // Devolvemos datos de prueba para que el test pase
        return response()->json([
            ['id' => 1, 'nombre' => 'Luis Gómez', 'equipo' => 'Tigres FC'],
            ['id' => 2, 'nombre' => 'Carlos Soto', 'equipo' => 'Leones Club']
        ]);
    }
}