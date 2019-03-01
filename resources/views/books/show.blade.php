@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Información del libro:</h1>
    <div>
        <h2>Título: {{$book->name}}</h2>
        <img src="../images/secretos-casa-rosada.png" alt="Book Picture">
        <h3>Descripcion: {{$book->description}} </h3>
        <a href="{{ URL::to('books') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection