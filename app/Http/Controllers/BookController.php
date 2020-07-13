<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$books = Book::orderBy('created_at', 'desc')->get();
        $books = Book::join('genres', 'genre_id', '=', 'genres.id')->join('authors', 'author_id', '=', 'authors.id')->select('books.*', 'genres.name as genre', 'authors.name as author')->get();

        return View('books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genre::orderBy('name')->get();
        $autores = Author::orderBy('name')->get();
        return View('books.create', ['genres' => $generos, 'authors' => $autores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required'
        ]);
        if ($request->file('poster') != null) {
            $path = Storage::putFile('posters', $request->file('poster'));
        } else {
            $path = null;
        }
        Book::create([
            'name' => $request->name,
            'description' => $request->description,
            'author_id' => $request->author,
            'genre_id' => $request->genre,
            'poster' => $path
        ]);
        return redirect('books')->with('success','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return View('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $genres = Genre::all();
        $authors = Author::all();

        return View('books.edit', ['book' => $book, 'genres' => $genres, 'authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('poster') != null) {
            $path = Book::find($id)->poster;
            Storage::delete($path);
            $path = Storage::putFile('posters', $request->file('poster'));
        } else {

            $path = Book::find($id)->poster;
        }
        
        $book = Book::find($id);

        $book->name = $request->name;
        $book->description = $request->description;
        $book->author_id = $request->author;
        $book->genre_id = $request->genre;
        $book->poster = $path;

        $book->save();

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = Book::find($id)->poster;
        Storage::delete($path);
        Book::destroy($id);
        return redirect('books');
    }

    public function books() {
        $books = Book::All()->toJson();
        return Response($books);
    }
}
