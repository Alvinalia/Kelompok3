<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use App\Models\Penyanyi;
use App\Models\Label;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyanyiController extends Controller

{
    public function index()
    {
        $Penyanyi = Penyanyi::all();
        return view('Penyanyi',['listPenyanyi' => $Penyanyi]);

        $Penyanyi = Penyanyi::with(['Label'])->get();
        return view('Penyanyi',['listPenyanyi' => $Penyanyi]);

    }

    public function create4(){
        $Penyanyi = Penyanyi::all();
        return view('create4',['listPenyanyi' => $Penyanyi]);
    } 
    public function store(Request $request)
    {

        $Penyanyi=Penyanyi::create($request->all());

        if($Penyanyi){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/Penyanyi');
    }

    public function edit4(Request $request, $id) {
        $Penyanyi = Penyanyi::findOrFail($id);
        return view('edit4',['listPenyanyi' => $Penyanyi]);

    }

    public function update(Request $request,$id) {
        $Penyanyi = Penyanyi::findOrFail($id);
        $Penyanyi->update($request->all());

        if($Penyanyi){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Diedit');
        }
        return redirect('/Penyanyi');

    }

    public function destroy($id)
    {
        $Penyanyi = Penyanyi::find($id)->delete();

        if($Penyanyi){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('/Penyanyi');
    }

}
