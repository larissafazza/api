<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $books,
        ];
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->genre = $request->genre;
        $book->author_id = $request->author_id;
        $book->save();
        return response()->json([
            "message" => "book record created"
        ], 201);
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'author_id' => 'required'
        ]);
 
        $book = Book::create($request->all());
        return [
            "status" => 1,
            "data" => $book
        ];
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return 
     */
    public function show(Book $book)
    {
        return [
            "status" => 1,
            "data" =>$book
        ];
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'author_id' => 'required',
        ]);
 
        $book->update($request->all());
 
        return [
            "status" => 1,
            "data" => $book,
            "message" => "Book updated successfully"
        ];
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return [
            "status" => 1,
            "data" => $book,
            "message" => "Book deleted successfully"
        ];
    }
}
