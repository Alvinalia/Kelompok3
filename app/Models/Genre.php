<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = "genre";
    
    public function genre_musik(){
        return $this->hasMany(GereMusik::class, "id", "id_genre");
    }
}
