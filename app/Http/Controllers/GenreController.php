<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $generos = Genre::orderBy('name')->get();
        return view('genres.index', ['genres' => $generos]);
    }

    public function create(){
        return view('genres.create');
    }

    public function store(Request $request) {
        Genre::create([
            'name' => $request->name
        ]);
        return redirect('genres')->with('success','Item created successfully!');
    }

    public function edit($id) {
        $genero = Genre::find($id);
        return view('genres.edit', ['genre' => $genero]);
    }

    public function update(Request $request, $id) {
        $genero = Genre::find($id);
        $genero->name = $request->name;
        $genero->save();
        return redirect('genres')->with('success','Item created successfully!');

    }

    public function destroy($id) {
        Genre::destroy($id);
        return redirect('genres')->with('success','Item created successfully!');
    }
}
