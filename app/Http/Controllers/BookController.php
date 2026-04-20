<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookShow(){
        $allBooks = Book::all();
        // dd($allBooks);
        return view ('welcome',
        [
            "books" => $allBooks,
        ]
        );
    }
}
