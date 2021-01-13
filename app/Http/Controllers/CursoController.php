<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        // Con paginate() se activa para que regrese la informacion por bloques de 15 registros
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos/index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos/create');
    }

    public function save(StoreCurso $request)
    {

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        return view('cursos/show', ['curso' => $curso]);
        //return view('cursos/show', compact($curso));
    }

    public function edit2($id)
    {
        $curso = new Curso();
        return $curso->find($id);
    }
    // Hace lo mismo que la funcion anterior pero con menos codigo
    public function edit(Curso $curso)
    {
        return view('cursos.edit',  compact('curso'));
    }    

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'name' => 'required|max:10',
            'description' => 'required|min:20',
            'category' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
