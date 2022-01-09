@extends('layouts.app')

@section('content')

@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif

<br>

<a href="{{route('register')}}">Crear nuevo usuario</a>

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
        <th>Tipo de usuario</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($usuarios as $usuario)
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->apellido1}}</td>
        <td>{{$usuario->apellido2}}</td>
        <td>{{$usuario->dni}}</td>
        <td>{{$usuario->direccion}}</td>
        <td>{{$usuario->telefono_contacto}}</td>
        <td>{{$usuario->tipo_usuario}}</td>
        <td>{{$usuario->email}}</td>


        <td>
            <a href="{{url('register/'.$usuario->id)}}">
                Editar
            </a>

             |

            <form action="{{url('/user/'.$usuario->id)}}" method="post">
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
