<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Penyanyi;
use Illuminate\Support\Facades\DB;

class UserController extends Controller

{
    public function index()
    {
        $User = user::all();
        return view('user',['listUser' => $User]);
    }

    public function create(){
        $User = User::all();
        return view('create',['listuser' => $User]);
    } 

    public function edit(Request $request, $id) {
        $User = User::findOrFail($id);
        return view('edit',['listuser' => $User]);

    }

    public function update(Request $request,$id) {
        $User = User::findOrFail($id);
        $User->update($request->all());
        return redirect('/User');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'unique:user',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);
        
        $User = User::create($request->all());
        return redirect('/User');
    
    }
    public function destroy($id)
    {
        $User = User::find($id)->delete();

        

        if($User){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('/User');
    }


}