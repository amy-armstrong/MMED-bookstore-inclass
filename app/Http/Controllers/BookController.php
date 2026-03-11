<?php

namespace App\HTTP\Controllers;

use Illuminate\HTTP\Request;

class BookController extends Controller
{
    public function index()
    {

        // return Book::all();
        //return Book::all()->toArray;
        // return json_encode(Book::all()->toArray());
        // return Book::all()->toJson();
        $books = Book::all()->toArray();
        return json_encode($books);
    }


    // dependency injection
    public function show(Book $book)
    {
         //dd($book);
        //  $book = Book::find($id);
        return $book;
        
    }
}
