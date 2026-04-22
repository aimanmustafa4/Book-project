<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Cache\Events\CacheFlushing;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookShow(){
        $allBooks = Book::all();
        // dd($allBooks);
        return view ('welcome',compact('allBooks')
        );
    }
    public function detailPage($book){
        $book_specified = Book::find($book);
    return view ('detailpage' , compact('book_specified'));
    }
}
