@extends('layouts.master')
@section('title')Listado de Usuarios @endsection
@section('content')
<table class="table table-bordered">
    <tr>
    <th>Nombre</th>
    <th>Mail</th>
    <th>Editor</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }} </td>
        <td>{{ $user->email }}</td>
        <td>
        <form method="POST" action="./changeeditor/{{$user->id}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            @if($user->editor)
            <button type="submit" class="btn btn-success">Editor</button>
            @endif
            @if(!$user->editor)
            <button type="submit" class="btn btn-warning">No Editor</button>
            @endif
            </form>
        </td>
        
    </tr>
    @endforeach
</table>

@endsection
