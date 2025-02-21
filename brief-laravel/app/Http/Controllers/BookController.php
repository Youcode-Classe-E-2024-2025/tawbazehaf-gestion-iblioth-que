<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(){
        if(!Auth::user()){
            return redirect('/');
        }
        $books = Book::with('user')->latest()->Paginate(9);
        return view('books.index', ['books' => $books]);
    }

    public function create(){
        if(Auth::user()->role !== 'admin'){
            return redirect('/books');
        }
        return view('books.create');
    }

    public function store(){
        request()->validate([
            'title'=>['required', 'min:3'],
            'price' => ['required']
        ]);
    
        Book::create([
            'title' => request('title'),
            'price'=> request('price'),
            'user_id'=>null
        ]);
        return redirect('/books');
    }

    public function show(Book $book){
        return view("books.show", ["book" => $book]);
    }

    public function edit(Book $book){
        if(Auth::user()->role !== 'admin'){
            return redirect('/books/'. $book->id);
        }
        return view("books.edit", ["book" => $book]);
    }

    public function update(Book $book){
        request()->validate([
            'title' => ['required', 'min:3'],
            'price' => ['required']
        ]);
    
        $book->title = request('title');
        $book->price = request('price');
        $book->save();
    
        // OR
    
        // $book->update([
        //     'title' => request('title'),
        //     'price' => request('price')
        // ]);
    
        return redirect('/books/' . $book->id); 
    }

    public function destroy(Book $book){
        if(Auth::user()->role !== 'admin'){
            return redirect('/books/'. $book->id);
        }
        $book->delete();
        return redirect('/books');
    }

    public function loan(Book $book){
        if($book->user_id === null){
            $book->user_id = Auth::id();
        }

        elseif ($book->user_id == Auth::id()) {
            $book->user_id = null;
        }

        else {
            abort(403, 'Unauthorized action');
        }

        $book->save();

        return redirect('/books/' . $book->id);
    }
}
