<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }
        
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric'
        ]);
        
        Book::create($validated);
        return redirect()->route('books.index');
    }
    

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}