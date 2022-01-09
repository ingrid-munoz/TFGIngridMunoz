@extends('layouts.app')
@section('content')

    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <br>

    @if(auth()->check() and auth()->user()->tipo_usuario==='admin')
    <a href="{{route('curso.create')}}">Crear nuevo curso</a>
    @endif

<table class="table table-light">
    <thead class="thead-light">
    <tr>
        @if(auth()->check() and auth()->user()->tipo_usuario==='admin')
        <th>Id</th>
        @endif

        <th>Familia profesional</th>
        <th>Nombre del curso</th>
        <th>Tipo de grado</th>
        <th>Descripción</th>

        @if(auth()->check() and auth()->user()->tipo_usuario==='admin')
        <th>Acciones</th>
        @endif

    </tr>
    </thead>

    <tbody>
    @foreach($cursos as $curso)
    <tr>
        @if(auth()->check() and auth()->user()->tipo_usuario==='admin')
        <td>{{$curso->id}}</td>
        @endif

        <td>{{$curso->familia_profesional}}</td>
        <td>{{$curso->nombre_curso}}</td>
        <td>{{$curso->tipo_grado}}</td>
        <td>{{$curso->descripcion}}</td>

        @if(auth()->check() and auth()->user()->tipo_usuario==='admin')

        <td>
            <a href="{{url('/curso/'.$curso->id.'/edit')}}">
                Editar
            </a>

             |

            <form action="{{url('/curso/'.$curso->id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>

        </td>

        @endif
    </tr>
    @endforeach
    </tbody>

</table>
@endsection
