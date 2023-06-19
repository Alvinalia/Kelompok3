<?php

namespace App\Http\Controllers;

use App\Models\Musik;

class MusikController extends Controller

{
    public function index()
    {
        $Musik = Musik::all();
        return view('musik',['listMusik' => $Musik]);

        $GenreMusik = GenreMusik::with('id_musik')->get(); 
        return view('genremusik',['listGenreMusik' => $GenreMusik]);
    }

}