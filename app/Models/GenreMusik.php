<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMusik extends Model
{
    use HasFactory;

    protected $table = "genre_musik";

    public function genre_musik(){
        return $this->belongsTo(Genre::class, "id_genre", "id");
    }
}
