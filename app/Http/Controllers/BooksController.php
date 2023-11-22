<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index (){
        return view("books");
    }

    public function store (Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required|string',
            'pages'=>['required','string','max:255'],
            'IBN'=>['required','string',''],
            'Category'=>['required','string',''],
            'Publisher'=>['required','string',''],
            'yop'=>['required','string',''],
            'user_id'=>['required','string',''],
        ]
        );
    }
}
