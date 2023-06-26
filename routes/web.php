<?php

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\GenreMusikController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\PenyanyiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MusikController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\LogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;




//Route::get('/', [LoginController::class, 'login'])->name('login');
//Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
//Route::post('/home', [HomeController::class, 'index']);
//Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::middleware(['auth'])->group(function(){
    Route::get('/', function (){
    return view('/home');
    });
    //Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
    //Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


    
    Route::get('/actionlogout', [LoginController::class, 'actionlogout']);

    Route::get('/GenreMusik',[GenreMusikController::class,'index']);
    Route::get('/create1',[GenreMusikController::class,'create1']);
    Route::post('/GenreMusik',[GenreMusikController::class,'store']);
    Route::get('/edit1/{id}',[GenreMusikController::class,'edit1']);
    Route::put('/GenreMusik/{id}',[GenreMusikController::class,'update']);
    Route::delete('/GenreMusik/{id}',[GenreMusikController::class,'destroy']);
    Route::get('/Musik',[MusikController::class,'index']);

    Route::get('/Musik',[MusikController::class,'index']);
    Route::get('/create2',[MusikController::class,'create2']);
    Route::post('/Musik',[MusikController::class,'store']);
    Route::get('/edit2/{id}',[MusikController::class,'edit2']);
    Route::put('/Musik/{id}',[MusikController::class,'update']);
    Route::delete('/Musik/{id}',[MusikController::class,'destroy']);
    
    Route::get('/Penyanyi',[PenyanyiController::class,'index']);
    Route::get('/create4',[PenyanyiController::class,'create4']);
    Route::post('/Penyanyi',[PenyanyiController::class,'store']);
    Route::get('/edit4/{id}',[PenyanyiController::class,'edit4']);
    Route::put('/Penyanyi/{id}',[PenyanyiController::class,'update']);
    Route::delete('/Penyanyi/{id}',[PenyanyiController::class,'destroy']);
    // Route::put('/Penyanyi/{id}',[PenyanyiController::class,'index']);

    Route::get('/Label',[LabelController::class,'index']);
    Route::get('/create3',[LabelController::class,'create3']);
    Route::post('/Label',[LabelController::class,'store']);
    Route::get('/edit3/{id}',[LabelController::class,'edit3']);
    Route::put('/Label/{id}',[LabelController::class,'update']);
    Route::delete('/Label/{id}',[LabelController::class,'destroy']);
    
    Route::get('/Genre',[GenreController::class,'index']);
    Route::get('/create5',[GenreController::class,'create']);
    Route::post('/Genre',[GenreController::class,'store']);
    Route::get('/edit5/{id}',[GenreController::class,'edit5']);
    Route::put('/Genre/{id}',[GenreController::class,'update']);
    Route::delete('/Genre/{id}',[GenreController::class,'destroy']);
    // Route::get('/Musik',[GenreController::class,'index']);

    Route::get('/Genre',[GenreController::class,'index']);
    Route::get('/GenreMusik',[GenreMusikController::class,'index']);
    Route::get('/Label',[LabelController::class,'index']);
    Route::get('/home2',[GenreMusikController::class,'index']);

    Route::get('/User',[UserController::class,'index']);
    Route::get('/create',[UserController::class,'create']);
    Route::post('/User',[UserController::class,'store']);
    Route::get('/edit/{id}',[UserController::class,'edit']);
    Route::put('/User/{id}',[UserController::class,'update']);
    Route::delete('/User/{id}',[UserController::class,'destroy']);
    Route::get('/Musik',[MusikController::class,'index']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
