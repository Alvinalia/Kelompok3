<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyanyi extends Model
{
    use HasFactory;

    protected $table = "penyanyi";
    protected $primaryKey = "id";
    protected $fillabel = [
        'id', 'nama', 'tanggal_lahir', 'jenis_kelamin'];


    public function Label()
    {
        return $this->belongsto(Label::class,'penyanyi_id','id');
    }
}
