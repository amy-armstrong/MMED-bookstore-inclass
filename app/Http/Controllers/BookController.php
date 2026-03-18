<?php

namespace App\HTTP\Controllers;

use Illuminate\HTTP\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $authorId= $request->get('author_id', null);

        dd($authorId);
        
        // return Book::all();
        //return Book::all()->toArray;
        // return json_encode(Book::all()->toArray());
        // return Book::all()->toJson();
       // $books = Book::all()->toArray();
       $books = Book::query()->get();
       if (authorId !==null){
        $booksQuery->where('author_id', '=', $authorId);
       }

        if (! empty($authorName)) {
            $booksQuery->whereHas('author', function ($authorQuery) use ($authorName) {
                $query->where('name', 'LIKE', '%' . $authorName . '%');
            });
        }

       $booksQuery->with('author');
       $books = $booksQuery->get();
        return $books;
    }


    // dependency injection
    public function show(Book $book)
    {

        //this will load author on book
        //this does a query
        $book->load('author');
        return $book;
        //this does NOT do a query
            //$authorOther = $book->author;

         //dd($book);
        //  $book = Book::find($id);
        
        
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $title = $request->input('title');
        $authorId = $request->input('author_id', null);
        $publisherId = $request->input('publisher_id', null);

        // $book = new Book([]);
        // $book = Book::make([]); = ::make() is the same as new Class() (only for models)
        // $book->save(); if you "new Model" or "::make() a model, yo0u have to call save
        // ::create does both
        $book = Book::create([
            'title' => $title,
        ]);

       // $book = Book::create($request->all());

       $book->author()->associate($authorId);
       $bool->save();

        return $book;
    }
}
