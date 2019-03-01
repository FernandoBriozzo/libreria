@extends('layouts.master')
<html>
<head>
<title>Librería</title>
</head>
<body>
@section('content')
<div class="container" style="border:2px solid red;">
<h1>Listado de libros</h1>
<a class="btn btn-primary" href="{{ URL::to('books/create') }}">Create a Book</a>
<div style="margin-left : 15px;">
<table class="table table-striped">
<tr>
    <th>Name</th>
    <th>Image</th>
    <th>Description</th>
    <th>Options</th>
</tr>
@foreach ($books as $book)
<tr>
    <td><a href="./books/{{$book->id}}"> {{$book->name}} </a></td>
    <td><img src="./images/secretos-casa-rosada.png" alt="Book Image" height="100px" width="75px"></td>
    <td>{{$book->description}}</td>
    <td>
    <a href="books/{{$book->id}}/edit" class="btn btn-secondary">Editar</a>
    <form method="POST" action="./books/{{$book->id}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">Borrar</button>
    </form>
    </td>
    </tr>
@endforeach
</table>
</div>
</div>
@endsection
</body>
</html>