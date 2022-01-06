@extends('layouts.app')
@section('content')
<label for="id">Id</label>
<input type="text" name="id" value="{{isset($curso->id) ? $curso->id:''}}" id="id">

<br>
<label for="familia_profesional">Familia Profesional</label>
<input type="text" name="familia_profesional" value="{{isset($curso->familia_profesional) ? $curso->familia_profesional:''}}" id="familia_profesional">
<br>
<label for="nombre_curso">Nombre Curso</label>
<input type="text" name="nombre_curso" value="{{isset($curso->nombre_curso) ? $curso->nombre_curso:''}}" id="nombre_curso">
<br>

<label for="tipo_grado">Tipo de grado</label>
<input type="text" name="tipo_grado" value="{{isset($curso->tipo_grado) ? $curso->tipo_grado:''}}" id="tipo_grado">

<br>
<label for="descripcion">Descripción</label>
<input type="text" name="descripcion" value="{{isset($curso->descripcion) ? $curso->descripcion:''}}" id="descripcion">
<br>


<input type="submit" value="Guardar datos">
<br>
<a href="{{url('curso/')}}">Volver a la lista de usuarios</a>
@endsection
