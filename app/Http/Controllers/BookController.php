<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostsTableBook;
use Carbon\Carbon;

class BookController extends Controller
{
    public function index()
    {
        $book = PostsTableBook::all();
        return view('book.index', compact('book'));
    }

    public function create($jdl)
    {
        $book = new PostsTableBook;
        $book->title = $jdl;
        $book->publisher = "Assalaam Studio";
        $book->pages = 100;
        $book->date = Carbon::now();
        $book->price = 150000;
        $book->status = false ;
        $book->synopsis = "Lorem Ipsum";
        $book->save();
        return $book;
    }
    public function show($id)
    {
        $book = PostsTableBook::findOrFail($id);
        return view('book.show', compact('book'));
    }
    public function edit($id, $jdl)
    {
        $book = PostsTableBook::find($id);
        $book->title = $jdl;
        $book->publisher = "Assalaam Studio";
        $book->pages = 100;
        $book->date = Carbon::now();
        $book->price = 150000;
        $book->status = false ;
        $book->synopsis = "Lorem Ipsum";
        $book->save();
        return $book;
    }
    public function delete($id)
    {
        $book = PostsTableBook::find($id);
        $book->delete();
        return $book;
    }
    public function select()
    {
        $book = PostsTableBook::select('title','publisher','pages','price')->take(3)->get();
        return $book;
    }
    public function count()
    {

    }
}
