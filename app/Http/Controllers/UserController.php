<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //Muestra los 5 primeros registros
        $datos['usuarios']=User::paginate(5);
        return view('user.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario.create');
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
        //$datosUsuario = request()->all();
        // Toma todos los datos menos el token
        $datosUsuario = request()->except('_token');
        //Despues guardarlos en la base de datos
        User::insert($datosUsuario);
        //Muestra el resultado en formato json
        //return response()->json($datosUsuario);
        return redirect('usuario')->with('mensaje','Usuario agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Buscar informacion a partir del id
        $usuario=User::findOrFail($id);
        return view('user.edit', compact('usuario'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Recibimos los datos y le quitamos el token y el method
        $datosUsuario = request()->except(['_token','_method']);
        User::where('id','=',$id)->update($datosUsuario);

        //Realiza la actualizacion y vuelve al formulario
        $usuario=User::findOrFail($id);
        return view('user.edit', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::destroy($id);
        //return redirect('usuario');
        return redirect('usuario')->with('mensaje','Usuario borrado con exito');
    }
}
