<form method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" value="{{$author->name}}">
    <button type="submit">Modificar</button>
    <a type="button" href="">Volver</a>
</form>