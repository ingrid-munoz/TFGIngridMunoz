@extends('resources.views.layouts.app')

@section('content')

@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif

<br>
<a href="{{url('usuario/create')}}">Crear nuevo usuario</a>
<br>

<a href="{{route('register')}}">Alta para iniciar sesión</a>

<br>

<table class="table table-light">
    <thead class="thead-light">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Primer apellido</th>
        <th>Segundo apellido</th>
        <th>DNI</th>
        <th>Direccion</th>
        <th>Telefono de contacto</th>
        <th>Email</th>
        <th>Tipo de usuario</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($usuarios as $usuario)
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->apellido1}}</td>
        <td>{{$usuario->apellido2}}</td>
        <td>{{$usuario->dni}}</td>
        <td>{{$usuario->direccion}}</td>
        <td>{{$usuario->telefono_contacto}}</td>
        <td>{{$usuario->email}}</td>
        <td>{{$usuario->tipo_usuario}}</td>

        <td>
            <a href="{{url('/usuario/'.$usuario->id.'/edit')}}">
                Editar
            </a>

             |

            <form action="{{url('/usuario/'.$usuario->id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>

        </td>
    </tr>
    @endforeach
    </tbody>

</table>
@endsection
