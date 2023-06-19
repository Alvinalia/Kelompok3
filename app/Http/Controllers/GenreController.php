<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller

{
    public function index()
    {
        $Genre = Genre::all();
        return view('genre',['listGenre' => $Genre]);

        $GenreMusik = GenreMusik::with(['genre'])->get();
        return view('GenreMusik',['listGenreMusik' => $GenreMusik]);
    }

}
