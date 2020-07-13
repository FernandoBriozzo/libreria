@extends('layouts.master')
@section('title') Crear Género @endsection
@section('content')
<h1>Crear Nuevo Género</h1>
<form method="POST">
    {{ csrf_field() }}
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Crear</button>
    <a type="button" href="">Volver</a>
</form>
@endsection
