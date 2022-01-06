<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['cursos']=Curso::paginate(5);
        return view('curso.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosCurso = request()->all();
        $datosCurso = request()->except('_token');
        Curso::insert($datosCurso);
        return response()->json($datosCurso);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id_curso)
    {
        // Buscar informacion a partir del id
        $curso=Curso::findOrFail($id_curso);
        return view('curso.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_curso)
    {
        //
        // Recibimos los datos y le quitamos el token y el method
        $datosCurso = request()->except(['_token','_method']);
        Curso::where('id_curso','=',$id_curso)->update($datosCurso);

        //Realiza la actualizacion y vuelve al formulario
        $curso=Curso::findOrFail($id_curso);
        return view('curso.edit', compact('curso'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_curso)
    {
        //
        Curso::destroy($id_curso);
        return redirect('curso');
    }
}
