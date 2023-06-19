<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;


class  BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', [
            'books' => Book::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->isbn = $request->input('isbn');
        $book->published_date = $request->input('published_date');

        $rules = [
            'title' => 'required',
            'author' => 'required',
            'price' => 'required|numeric',
            'isbn' => 'required|digits:13',
            'published_date' => ['required', 'date', function ($attribute, $value, $fail) {
                if (Carbon::parse($value)->isFuture()) {
                    $fail('The '.$attribute.' must be a date in the past.');
                }
            }],
        ];

        $validatedData = $request->validate($rules);

        $book->save();

        // Redirect or perform any additional actions

        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }





    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'price' => 'required|numeric',
            'isbn' => 'required|digits:13',
            'published_date' => 'required',
        ]);

        $book->update($validatedData);
        return redirect(route('books.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('books.index'));
    }

}
