<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMusik extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_musik',
        'id_genre',
    ];
    protected $table = 'genre_musik';
    public $timestamps = false;

    public function Genre(){
        return $this->belongsTo(Genre::class, "id_genre", "id");
    }
    public function Musik(){
        return $this->belongsTo(Musik::class, "id_musik", "id");
    }

}
