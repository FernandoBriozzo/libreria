@extends('layouts.master')
@section('content')
<h1>Listado de Géneros</h1>
<a type="button" href="./genres/create">Crear Género</a>
<br><br>
@foreach ($genres as $genre)
<li>{{$genre->name}}</li>
@if(auth()->user()->editor)
<a class="btn btn-warning" href=".genres/{{$genre->id}}/edit">Editar</a>
<form method="POST" action="./genres/{{ $genre->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-danger" type="submit" onclick="return preguntar()">Borrar</button>
</form>
@endif
@endforeach 
@endsection
<script>
    function preguntar() {
        return confirm("está seguro de querer borrar el género?");
    }
</script>
