@extends('layouts.app')
@section('content')
<form action="{{url('/curso/'.$curso->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('curso.form');
</form>
@endsection
