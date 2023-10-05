<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
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
    public function store(CreateRequest $request)
    {
       dd($request->validated());
       Book::query()->create($request->validated());
        return redirect()->route("books.index")->with('success', $request->title . "book added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
