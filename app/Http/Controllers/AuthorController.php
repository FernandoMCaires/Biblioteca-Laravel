<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){
        return view('author.index', ['authors'=>Author::all()]);
    }

    public function create(){
        return view('author.create');
    }

    public function store(Request $request){
        Author::create($request->all());
        return redirect('/author');
    }

    public function show(Author $author){
        return view('author.show', ['author' => $author]);
    }

    public function edit(Author $author){
        return view('author.edit', ['author' => $author]);
    }

    public function update(Request $request, Author $author){
        $author->update($request->all());
        return redirect('/author/'.$author->id);
    }
}
