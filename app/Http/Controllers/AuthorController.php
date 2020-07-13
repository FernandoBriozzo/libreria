<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $autores = Author::orderBy('name')->get();
        return view('authors.index', ['authors' => $autores]);
    }

    public function create(){
        return view('authors.create');
    }

    public function store(Request $request) {
        Author::create([
            'name' => $request->name
        ]);
        return redirect('authors')->with('success','Item created successfully!');
    }

    public function edit($id) {
        $autor = Author::find($id);
        return view('authors.edit', ['author' => $autor]);
    }

    public function update(Request $request, $id) {
        $autor = Author::find($id);
        $autor->name = $request->name;
        $autor->save();
        return redirect('authors')->with('success','Item created successfully!');

    }

    public function destroy($id) {
        Author::destroy($id);
        return redirect('authors')->with('success','Item created successfully!');
    }
}
