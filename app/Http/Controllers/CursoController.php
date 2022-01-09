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
        $datos['cursos']=Curso::paginate(15);
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
        //return response()->json($datosCurso);
        //return response()->json($datosCurso)->with('mensaje','Curso agregado con exito');
        return redirect('curso')->with('mensaje','Curso agregado con exito');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        // Buscar informacion a partir del id
        //$curso=Curso::findOrFail($curso);
        //$curso=Curso::all();
        //return view('curso.show', compact('curso'));

        //return view("curso.show",['curso'=>$curso]);
        //return redirect("curso.index");

        $curso = Curso::all();
        return response()->json($curso);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Buscar informacion a partir del id
        $curso=Curso::findOrFail($id);
        return view('curso.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // Recibimos los datos y le quitamos el token y el method
        $datosCurso = request()->except(['_token','_method']);
        Curso::where('id','=',$id)->update($datosCurso);

        //Realiza la actualizacion y vuelve al formulario
        $curso=Curso::findOrFail($id);
        return view('curso.edit', compact('curso'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Curso::destroy($id);
        return redirect('curso')->with('mensaje','Curso borrado con exito');
        //return redirect('curso');
    }
}
