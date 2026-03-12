<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create(){
        return view('book.create');
    }

    public function store(Request $request){
        Book::create($request->all());
        return redirect('/book');
    }

    public function index(){
        return view('book.index', ['books' => Book::all()]);
    }
}
