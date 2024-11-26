<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class AdminController extends Controller
{
    public function index()
    {
    
        return view('admin.dashboard'); // Asegúrate de que esta vista exista
        
    }
   
}
