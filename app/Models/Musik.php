<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musik extends Model
{
    use HasFactory;

    protected $table = "musik";
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'label_id'];

    public function Genre(){
        return $this->belongsToMany(Genre::class,'genre_musik', 'id_genre',"id_musik"); 
    }

    public function Label(){
        return $this->belongsTo(Label::class, "Label_id", "id");
    }
}
