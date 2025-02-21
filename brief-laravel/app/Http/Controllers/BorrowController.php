<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function borrow(Book $book)
    {
        if ($book->stock > 0) {
            Borrow::create([
                'user_id' => auth()->id(),
                'book_id' => $book->id,
                'borrowed_at' => now(),
            ]);

            $book->decrement('stock');

            return back()->with('success', 'Book borrowed successfully!');
        }

        return back()->with('error', 'Book not available.');
    }

    public function return(Book $book)
    {
        $borrow = Borrow::where('user_id', auth()->id())
            ->where('book_id', $book->id)
            ->whereNull('returned_at')
            ->first();

        if ($borrow) {
            $borrow->update(['returned_at' => now()]);
            $book->increment('stock');
            return back()->with('success', 'Book returned successfully!');
        }

        return back()->with('error', 'No active borrow found.');
    }
}