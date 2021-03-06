<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all()->sortBy('id');
        return view('genres.index')->with(['genres'=>$genres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre = $request->input('genre');

        Genre::create(
            [
                'genre' => $genre
            ]
        );

        return redirect('genres');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genres.show')->with(['genre'=>$genre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genres.edit')->with(['genre'=>$genre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->genre = $request->input('genre');

        $genre->save();

        return redirect('genres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return redirect('genres');
    }

    public function api_genres()
    {
        return Genre::all();
    }

    public function api_update(Request $request)
    {
        $genre = Genre::find($request->input('id'));
        if ($genre == null) {
            return response()->json([
                'status' => 0,
            ]);
        }

        $genre->genre = $request->input('genre');
        if ($genre->save()) {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $genre = Genre::find($request->input('id'));

        if ($genre == null) {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($genre->delete()) {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
