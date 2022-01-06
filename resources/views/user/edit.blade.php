
<form action="{{url('/user/'.$usuario->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('usuario.form',['modo'=>'Editar']);

</form>

