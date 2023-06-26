<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\GenreMusik;
use App\Models\Musik;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

   public function store(Request $request)
   {
        $GenreMusik=GenreMusik::create($request->all());

        if($GenreMusik){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/GenreMusik');

   }

    public function create1(){
        $Musik = Musik::all();
        $Genre = Genre::all();
        $GenreMusik = GenreMusik::all();
        return view('create1', compact('Musik','Genre', 'GenreMusik'));
    } 

    public function update(Request $request,$id) {
        $GenreMusik = GenreMusik::findOrFail($id);
        $GenreMusik->update($request->all());

        if($GenreMusik){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Diedit');
        }
        return redirect('/GenreMusik');

    }

    public function destroy($id)
    {
        $GenreMusik = GenreMusik::find($id)->delete();

        if($GenreMusik){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('/GenreMusik');
    }
    


}
