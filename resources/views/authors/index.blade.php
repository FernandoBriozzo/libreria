@extends('layouts.master')
@section('content')
<h1>Listado de Autores</h1>
<a type="button" href="./authors/create">Crear Autor</a>
<br><br>
@foreach ($authors as $author)
<li>{{$author->name}}</li>
@if(auth()->user()->editor)
<a class="btn btn-warning" href="./authors/{{$author->id}}/edit">Editar</a>
<form method="POST" action="./authors/{{ $author->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-danger" type="submit" onclick="return preguntar()">Borrar</button>
</form>
@endif
@endforeach
@endsection

<script>
    function preguntar() {
        return confirm("está seguro de querer borrar el autor?");
    }
</script>
