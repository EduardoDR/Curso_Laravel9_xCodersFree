<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::all();
    


        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        //compact('curso'); // devuelve: ['curso' => $curso]
        return view('cursos.show', compact('curso'));
    }
}
