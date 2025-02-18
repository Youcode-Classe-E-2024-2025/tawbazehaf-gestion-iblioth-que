<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'quantity',
    ];

    // Define any relationships here, e.g., to Borrowing
    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}