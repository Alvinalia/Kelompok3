<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musik extends Model
{
    use HasFactory;

    protected $table = "musik";
    protected $primaryKey = "id";

    public function GenreMusik(){
        return $this->belongsTo(GenreMusik::class, "id_musik"); 
    }

    public function Label(){
        return $this->belongsTo(Label::class, "Label_id", "id");
    }
}
