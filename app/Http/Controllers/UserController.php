<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Datos quemados para los usuarios
        $usuarios = [
            [
                'id' => 1, 
                'nombre' => 'Juan Pérez', 
                'email' => 'juan@example.com', 
                'telefono' => '123456789',
                'rol' => 'Vendedor',
                'vereda' => 'Soledad'
            ],
            [
                'id' => 2, 
                'nombre' => 'María García', 
                'email' => 'maria@example.com', 
                'telefono' => '987654321',
                'rol' => 'Cliente',
                'vereda' => 'Varas'
            ],
            [
                'id' => 3, 
                'nombre' => 'Carlos López', 
                'email' => 'carlos@example.com', 
                'telefono' => '456123789',
                'rol' => 'Administrador',
                'vereda' => 'Soledad Pesquera'
            ],
            [
                'id' => 2, 
                'nombre' => 'María García', 
                'email' => 'maria@example.com', 
                'telefono' => '987654321',
                'rol' => 'Cliente',
                'vereda' => 'Varas'
            ],
            [
                'id' => 2, 
                'nombre' => 'María García', 
                'email' => 'maria@example.com', 
                'telefono' => '987654321',
                'rol' => 'Cliente',
                'vereda' => 'Varas'
            ],
            [
                'id' => 2, 
                'nombre' => 'María García', 
                'email' => 'maria@example.com', 
                'telefono' => '987654321',
                'rol' => 'Cliente',
                'vereda' => 'Varas'
            ],
            // Agrega más usuarios si lo necesitas
        ];

        return view('/admin/usuarios', ['usuarios' => $usuarios]);
    }
}
