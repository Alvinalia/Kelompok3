<?php

namespace App\Http\Controllers;

use App\Models\GenreMusik;

class GenreMusikController extends Controller

{
    public function index()
    {
        $GenreMusik = GenreMusik::all();
        return view('GenreMusik',['listGenreMusik' => $GenreMusik]);

        $Genre = Genre::with('genre')->get(); 
        return view('genre',['listGenre' => $Genre]);

        $Musik = Musik::with('musik')->get(); 
        return view('musik',['listMusik' => $Musik]);
    }

    public function index2(){
        
        return view('home',['listHome']);
    }

}
