@extends('layouts.master')
@section('title') Create Book @endsection
@section('content')
<div style="border: 2px solid blue;">
    <h1>Create a Book</h1>


    <form method="POST" action="../books" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="descrpition">Description: </label>
            <input type="text" id="description" name="description">
        </div>

        <div class="form-group">
            <label for="author">Auhtor: </label>
            <select id="author" name="author">
                @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="genre">Genre: </label>
            <select id="genre" name="genre">
                @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="poster">Poster: </label>
            <input type="file" id="poster" name="poster">
        </div>

        <button class="btn btn-primary" type="submit">Create the Book!</button>
        <a class="btn btn-secondary" href="{{ URL::to('books') }}">Volver</a>
    </form>
</div>
@endsection