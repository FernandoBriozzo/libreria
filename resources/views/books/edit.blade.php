<!DOCTYPE html>
<html>
<head>
    <title>Editar libro</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
        <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
    </ul>
</nav>

<h1>Edit {{ $book->name }}</h1>

<!-- if there are creation errors, they will show here -->

<form method="POST" action="../{{$book->id}}">
{{csrf_field()}}
<input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type=text name="name" value="{{$book->name}}">
    </div>

    <div class="form-group">
        <label for="description">Descripción: </label>
        <input type="text" name="description" value="{{$book->description}}">
    </div>

    <button type="submit" class="btn btn-primary">Editar</button>
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>

</form>

</div>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>