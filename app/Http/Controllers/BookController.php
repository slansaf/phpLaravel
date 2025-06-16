<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Book;

class BookController extends Controller
{
    public function show() {
        $books = Book::all();
        return view('form_books', compact('books')); 
    }

    public function store(Request $request) {
 
       $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:books,title'],
            'author' => ['required', 'string', 'max:100'],
            'genre' => ['required', 'string'],
        ]);


        $book = new Book($request->all());
		$book->save();

         
        return redirect()->route('show_books')->with('success', 'Книга успешно добавлена!');

    }
}
