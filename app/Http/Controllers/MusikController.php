<?php

namespace App\Http\Controllers;

use App\Models\Musik;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Label;
use App\Models\GenreMusik;

class MusikController extends Controller

{
    public function index()
    {
        $Musik = Musik::all();
        return view('musik',['listMusik' => $Musik]);

        $GenreMusik = GenreMusik::with('id_musik')->get(); 
        return view('genremusik',['listGenreMusik' => $GenreMusik]);

        $Label = Label::with('id_label')->get(); 
        return view('label',['listlabel' => $Label]);
    }

    public function create2(){
        $Musik = Musik::all();
        $GenreMusik = GenreMusik::all();
        $Label = Label::all();
        return view('create2', compact('Label','GenreMusik'));
    } 

    public function edit2(Request $request, $id) {
        $Musik = Musik::findOrFail($id);
        $GenreMusik = GenreMusik::findOrFail($id);
        $Label = Label::findOrFail($id);
        return view('edit2',['listMusik' => $Musik, 'listGenreMusik' => $GenreMusik,'Label' => $Label]);

    }

    public function update(Request $request,$id) {
        $Musik = Musik::findOrFail($id);
        $Musik->update($request->all());
        return redirect('/Musik');

    }

    public function store(Request $request)
    {
        
        $Musik=Musik::create($request->all());
        
        if($Musik){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/Musik');

    }
    public function destroy($id)
    {
        $Musik = Musik::find($id)->delete();

        if($Musik){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('/Musik');
    }

}
