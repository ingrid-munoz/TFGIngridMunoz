@extends('resources.views.layouts.app_admin')

@section('content')

    <h3>{{$modo}} usuario</h3>

    <label for="id">ID</label>
    <input type="text" name="id" value="{{isset($usuario->id) ? $usuario->id:''}}" id="id">

    <!-- NO ME DEJA GUARDAR, ME DA ERROR POR EL SIGNO DE INTERROGACION
    <input type="text" name="id" value="{{isset($usuario->id)?$usuario->id:''}}" id="id">-->

    <br>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{isset($usuario->nombre)?$usuario->nombre:''}}" id="nombre">
    <br>
    <label for="apellido1">Primer apellido</label>
    <input type="text" name="apellido1" value="{{isset($usuario->apellido1)?$usuario->apellido1:''}}" id="apellido1">
    <br>
    <label for="apellido2">Segundo apellido</label>
    <input type="text" name="apellido2" value="{{isset($usuario->apellido2)?$usuario->apellido2:''}}" id="apellido2">
    <br>
    <label for="dni">Dni/Nie</label>
    <input type="text" name="dni" value="{{isset($usuario->dni)?$usuario->dni:''}}" id="dni">
    <br>
    <label for="direccion">Dirección</label>
    <input type="text" name="direccion" value="{{isset($usuario->direccion)?$usuario->direccion:''}}" id="direccion">
    <br>
    <label for="telefono_contacto">Telefono de contacto</label>
    <input type="number" name="telefono_contacto" value="{{isset($usuario->telefono_contacto)?$usuario->telefono_contacto:''}}" id="telefono_contacto">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" value="{{isset($usuario->email)?$usuario->email:''}}" id="email" >
    <br>
    <label for="tipo_usuario">Tipo de usuario</label>
    <input type="text" name="tipo_usuario" value="{{isset($usuario->tipo_usuario)?$usuario->tipo_usuario:''}}" id="tipo_usuario">

    <br>

    <input type="submit" value="{{$modo}} datos">

    <a href="{{url('usuario/')}}">Volver a la lista de usuarios</a>
    <br>

@endsection