<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Support\Facades\Session;
use App\Models\GenreMusik;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller

{
    public function index()
    {
        $Genre = Genre::all();
        return view('genre',['listGenre' => $Genre]);

        $GenreMusik = GenreMusik::with(['genre'])->get();
        return view('GenreMusik',['listGenreMusik' => $GenreMusik]);
    }

    public function create(){
        $Genre = Genre::all();
        $GenreMusik = GenreMusik::all();
        return view('create5', compact('Genre','GenreMusik'));
    } 
    public function store(Request $request)
    {

        $Genre = Genre::create($request->all());
        return redirect('/Genre');
    
    }

    public function edit5(Request $request, $id) {
        $Genre = Genre::findOrFail($id);
        $GenreMusik = GenreMusik::findOrFail($id);
        return view('edit5',['listGenre' => $Genre, 'listGenreMusik' => $GenreMusik]);

    }

    public function update(Request $request,$id) {
        $Genre = Genre::findOrFail($id);
        $Genre->update($request->all());
        return redirect('/Genre');

    }

    public function destroy($id)
    {
        $Genre = Genre::find($id)->delete();

        if($Genre){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('/Genre');
    }



}
