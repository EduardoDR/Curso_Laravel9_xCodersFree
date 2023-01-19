<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;


class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();//Para segmentar la muestra en pantalla de los registros y ordenarlos de forma descendente
    
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        
        /*$curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();*/
        
        /*
        //FORMA DETALLADA de como se puede crear y llenar el objeto automáticamente
        $curso = Curso::create([
            'name' => $request->name,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
        ]);*/

        //FORMA RESUMIDA
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);//Para redireccionar a una página en especifico
        //return redirect()->route('cursos.show', $curso->id);//La forma resumida es la anterior, esta es la logica que sigue que también funciona
    }   

    public function show(Curso $curso){
        //compact('curso'); // devuelve: ['curso' => $curso]
        //$curso = Curso::find($id); //Si al metodo solo se le pasa el ID

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        //$curso = Curso::find($id); //Si al método se le pasa como parámetro el ID

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);
        
        //Se asignan los valores de la vista (formulario) al objeto a Actualizar
        /*$curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;  
        
        $curso->save(); */

        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);//Para redireccionar a una página en especifico

    }
    
    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index', $curso);//Para redireccionar a una página en especifico
    }
}
