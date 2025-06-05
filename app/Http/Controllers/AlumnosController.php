<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumnos::get();
        return view('colegio.index', compact('alumnos'));
        
    }

    public function show(string $id)
    {
        $alumno = Alumnos::findOrFail($id);
        return view('colegio.show', compact('alumno'));
    }

    

}
