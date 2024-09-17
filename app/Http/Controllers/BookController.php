<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Author;

use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index(){
        return view('book.index', ['books'=>Book::all()]);
    }
    
    public function create(){
        return view('book.create', ['authors'=>Author::all()]);
    }

    public function store(Request $request){
        $book = Book::create($request->all());
        $book->Tags()->attach($request['tags']);        
        return redirect('/book');
    }

    public function show(Book $book){
       return view('book.show', ['book'=>$book]); 
    }

    public function edit(Book $book){
        return view('book.edit', ['book'=>$book]);
    }

    public function update(Book $book, Request $request){
        $book = Book::update($request->all());
        $book->Tags()->sync($request['tags']);
        return redirect('/book');
    }

    public function delete(Book $book){
        $book->Tags()->detach($book->Tags);
        $book->delete();
        return redirect('/book');
    }
    
}
