<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = \App\Models\Book::all();
        return view("books.index", [
            "books" => $books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        Book::query()->create($request->validated());
        return redirect()->route("books.index")->with('success', $request->title . "book added successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $images = array_slice(scandir(public_path('gallary')), 2);
        $book =  Book::query()->findOrFail($id);
//        dd($images);
        return view("books.show",compact('images','book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("books.edit", [
            "book" => Book::query()->findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::query()->findOrFail($id);
        $book->update($request->validated());
        return redirect()->route("books.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::query()->findOrFail($id)->delete();
        return redirect()->route("books.index");
    }
}
