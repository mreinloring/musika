<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /* Metodo para mostrar la pagina principal */
    public function index(){
        return view('alumnos.index');
    }

    public function create(){
        return view('alumnos.create');
    }

    //Metodo para mostrar un alumno en particular
    public function show($alumno){
        return view('alumnos.show', compact('alumno'));
    }
}
