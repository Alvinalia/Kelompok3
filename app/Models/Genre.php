<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = "genre";
    public $timestamps = false;

    protected $fillable = [
        'id','nama'
    ];
    
    public function Musik(){
        return $this->belongsToMany(Musik::class, "genre_musik", 'id_musik',"id_genre");
    }
}

