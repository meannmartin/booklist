<?php

namespace App\Http\Controllers;

use App\Models\book_list;
use Illuminate\Http\Request;
use App\Http\Requests\BookListRequest;

class BookListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book_list.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookListRequest $bookListRequest, book_list $book_list)
    {
        $posting = $book_list::create($bookListRequest->all());
        return response()->json(['message' => 'Book has been successfully saved', 'data' => $posting]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book_list  $book_list
     * @return \Illuminate\Http\Response
     */
    public function show(book_list $book_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book_list  $book_list
     * @return \Illuminate\Http\Response
     */
    public function edit(book_list $book_list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book_list  $book_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book_list $book_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book_list  $book_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(book_list $book_list)
    {
        //
    }
}
