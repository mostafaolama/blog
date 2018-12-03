<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //show the index of all books
    function index(){
        $books = book::all();
        //dd($books);
        return view('book.bookIndex', compact('books'));
    }

    //show book information in order to id
    function show($id){
        $book = book::findOrFail($id);
        return view('book.bookInfo', compact('book'));
    }

    function creat(){
        return view('book.creat');
    }

    function save(Request $request){
        dd($request->all());
        dd("new mail");
    }
}
