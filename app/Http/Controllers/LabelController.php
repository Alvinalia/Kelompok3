<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Label;
use App\Models\Penyanyi;
use App\Models\Musik;

class LabelController extends Controller

{
    public function index() {

        $Label = Label::all();
        return view('Label',['listLabel' => $Label]);

        $Penyanyi = Penyanyi::with('penyanyi')->get(); 
        return view('label',['listLabel' => $Label]);

        $Musik = Musik::with('musik')->get(); 
        return view('musik',['listMusik' => $Musik]);
    }


    public function create3(){
        $Label = Label::all();
        $Musik = Musik::all();
        $Penyanyi = Penyanyi::all();
        return view('create3', compact('Musik', 'Penyanyi', 'Label'));
    } 

    public function edit3(Request $request, $id) {
        $Label = Label::findOrFail($id);
        $Musik = Musik::findOrFail($id);
        $Penyanyi = Penyanyi::findOrFail($id);
        return view('edit3',['listLabel' => $Label, 'Musik' => $Musik, 'Penyanyi' => $Penyanyi]);

    }

    public function update(Request $request,$id) {
        $Label = Label::findOrFail($id);
        $Label->update($request->all());

        if($Label){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Diedit');
        }

        return redirect('/Label');

    }

    public function store(Request $request)
    {
        
        $Label = Label::create($request->all());
        return redirect('/Label');
    }

    public function destroy($id){
        $Label = Label::find($id)->delete();
        
        if($Label){
        Session::flash('status','success');
        Session::flash('message','Data Berhasil Dihapus');  
    }
    
    return redirect('/Label');
    }

    

}
