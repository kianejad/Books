<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Exception;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        try {
            Book::query()->create($request->validated());
            return redirect()->route("books.index")->with('success', $request->title . "book added successfully");
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect(status: 500)->route('books.create')->with('fail', 'book didnt add!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book =  Book::query()->findOrFail($id);
        $galleries = json_decode($book->gallery,true);
        return view("books.show",compact('book','galleries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view("books.edit",compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, string $id)
    {
//        dd($request->validated());
        try {
            $book = Book::query()->findOrFail($id);
            $book->update($request->validated());
            return redirect(status: 200)->route("books.index")->with('success', $request->title . "book updated successfully");
        }catch (Exception $e){
            Log::error($e->getMessage());
            return redirect(status: 500)->route('books.edit', $book)->with('fail', 'book didnt update!');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Book::query()->findOrFail($id)->delete();

            return redirect(status: 200)->route("books.index")->with('success',  "book deleted successfully");
        }catch (Exception $e){
            Log::error($e->getMessage());
            return redirect(status: 500)->route('books.index')->with('fail', 'book didnt delete!');
        }

    }
}
