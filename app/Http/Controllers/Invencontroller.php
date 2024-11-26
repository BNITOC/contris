<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvenController extends Controller
{
    private $pins;

    public function __construct()
    {
        // Datos simulados
        $this->pins = [
            ['id' => 1, 'codigo' => 'ABC123', 'duracion' => 7, 'fecha_activacion' => null],
            ['id' => 2, 'codigo' => 'DEF456', 'duracion' => 15, 'fecha_activacion' => '2024-11-01'],
            ['id' => 3, 'codigo' => 'GHI789', 'duracion' => 30, 'fecha_activacion' => null],
        ];
    }

    // Método para listar los pines
    public function index()
    {
        $pins = $this->pins; // Datos simulados
        return view('/admin/inventario', compact('pins'));
    }



    
}
