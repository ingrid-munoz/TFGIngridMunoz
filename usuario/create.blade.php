<form action="{{ url('/usuario') }}" method="post">
    @csrf
    @include('form',['modo'=>'Crear'])
</form>

