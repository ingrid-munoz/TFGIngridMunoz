@extends('layouts.app')
@section('content')
<form action="{{ url('/curso') }}" method="post">
    @csrf
    @include('curso.form')
</form>
@endsection
