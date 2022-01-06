
<form action="{{url('/usuario/'.$usuario->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('form',['modo'=>'Editar']);

</form>

