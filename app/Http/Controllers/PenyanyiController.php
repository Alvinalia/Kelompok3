<?php

namespace App\Http\Controllers;

use App\Models\Penyanyi;
use App\Models\Label;

class PenyanyiController extends Controller

{
    public function index()
    {
        $Penyanyi = Penyanyi::with(['Label'])->get();
        return view('Penyanyi',['listPenyanyi' => $Penyanyi]);

    }
}