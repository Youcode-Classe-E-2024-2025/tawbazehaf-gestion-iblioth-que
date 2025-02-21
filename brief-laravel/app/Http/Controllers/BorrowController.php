<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::all();
        return view('borrowings.index', compact('borrowings'));
    }

    public function create()
    {
        return view('borrowings.create');
    }


    public function store(Request $request, Book $book)
    {
        $borrow = Borrow::create([
            'user_id' => auth()->id(),
            'book_id' => $book->id,
            'status' => 'pending'
        ]);
        
        return redirect()->back()->with('success', 'Borrow request sent!');
    }



    public function approve(Borrow $borrow)
    {
        if (!auth()->user()->is_admin) {
            abort(403);
        }
        
        $borrow->update(['status' => 'approved']);
        return redirect()->back();
    }

    // Add edit, update, and destroy methods as needed
}