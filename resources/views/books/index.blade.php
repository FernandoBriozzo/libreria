@extends('layouts.master')
@section('title') Libreria @endsection
@section('content')
<div class="container">
<h1>Listado de libros</h1>
@if(auth()->check())
<a class="btn btn-primary" href="{{ URL::to('books/create') }}">Crear Libro</a>
@endif
<div>
<table class="table table-striped">
<tr>
    <th>Título</th>
    <th>Portada</th>
    <th>Descripción</th>
    @if(auth()->check() && auth()->user()->editor)
    <th>Opciones</th>
    @endif
</tr>
@foreach ($books as $book)
<tr>
    <td><a href="./books/{{$book->id}}"> {{$book->name}} </a></td>
    <td><img src="../storage/app/{{ $book->poster }}" alt="Book Image" height="100px" width="75px"></td>
    <td>{{$book->description}} <br><br> Género: {{ $book->genre }} <br>Autor: {{ $book->author }}</td>
    @if (Auth::check() && auth()->user()->editor)
    <td>
    <a href="books/{{$book->id}}/edit" class="btn btn-secondary">Editar</a>
    <form method="POST" action="./books/{{$book->id}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger" onclick="return borrar()">Borrar</button>
    </form>
    </td>
    @endif
    </tr>
@endforeach
</table>
</div>
</div>
<script>
    function borrar() {
        return confirm("Está seguro de borrar el libro?");
    }
</script>
@endsection
