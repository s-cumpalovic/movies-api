<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $request->query('title');

        $pagTake = $request->query('take');
        $pagSkip = $request->query('skip');

        return Movie::query()->search($title)->take($pagTake)->skip($pagSkip)->get();
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
    public function store(CreateMovieRequest $request)
    {
        $validated = $request->validated();

        return Movie::create([
            'title' => $validated['title'],
            'director' => $validated['director'],
            'imgUrl' => $validated['imgUrl'],
            'duration' => $validated['duration'],
            'releaseDate' => $validated['releaseDate'],
            'genre' => $validated['genre'],

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Movie::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMovieRequest $request, $id)
    {
        $validated = $request->validated();

        return Movie::where('id', $id)->update([
            'title' => $validated['title'],
            'director' => $validated['director'],
            'imgUrl' => $validated['imgUrl'],
            'duration' => $validated['duration'],
            'releaseDate' => $validated['releaseDate'],
            'genre' => $validated['genre'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Movie::where('id', $id)->delete();
    }
}
