<!-- app/views/books/create.blade.php -->
@extends('layouts.master')

@section('content')
<div style="border: 2px solid blue;">
<h1>Create a Book</h1>


<form method="POST" action="../books">
    {{csrf_field()}}

    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" required>
    </div>

    <div class="form-group">
        <label for="descrpition">Description: </label>
        <input type="text" name="description" required>
    </div>

    <button class="btn btn-primary" type="submit">Create the Book!</button>
    <a class="btn btn-secondary" href="{{ URL::to('books') }}">Volver</a>
</form>
</div>
@endsection

