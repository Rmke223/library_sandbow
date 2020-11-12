<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show()  {
    $book = Book::all();
    return view ('Book', ['book' => $book]);
}
    public function create(){
    return view ('CreateBook');    
}
    public function store(){
        request()->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
        ]);

        $book = new Book();
        $book->title = request('title');
        $book->author = request('author');
        $book->genre = request('genre');
        $book->save();
        return redirect('/books');
}
    public function edit($id){
        $book = Book::find($id);
    return view('EditBook', compact('book'));
}
    public function update($id){
        $book = Book::find($id);
        $book->title = request('title');
        $book->author = request('author');
        $book->genre = request('genre');
        $book->save();
        return redirect('/books');
    }

}
