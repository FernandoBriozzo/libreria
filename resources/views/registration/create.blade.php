@extends('layouts.master')

@section('content')

    <div class="col-sm-8">
        <h1>Registrar Usuario Nuevo</h1>


        <form method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" maxlength="60" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" maxlength="80" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" maxlength="60" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input type="password" maxlength="60" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Registrarme</button>
            </div>


            @include('layouts.errors')

        </form>
    </div>

@endsection