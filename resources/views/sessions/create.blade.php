@extends('layouts.master')
@section('title') Ingrese sus datos @endsection
@section('content')
<form method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="email" id="email" name="email" email required>
    </div>
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input class="form-control" type="password" id="password" name="password" password required>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Login</button>
        <a href="" class="btn btn-default">Register</a>
    </div>
</form>
@endsection