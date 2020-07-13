@extends('layouts.master')
@section('title') Crear Autor @endsection
@section('content')
<h1>Crear Nuevo Autor</h1>
<form method="POST">
    {{ csrf_field() }}
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Crear</button>
    <a type="button" href="">Volver</a>
</form>
@endsection