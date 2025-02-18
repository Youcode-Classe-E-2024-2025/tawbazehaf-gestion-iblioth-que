<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use Illuminate\Http\Request;

class BorrowingController extends Controller
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

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'borrowed_at' => 'required|date',
        ]);

        Borrowing::create($request->all());
        return redirect()->route('borrowings.index')->with('success', 'Borrowing recorded successfully.');
    }

    // Add edit, update, and destroy methods as needed
}