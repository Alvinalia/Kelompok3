<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'username',
        'no_tlp',
        'jenis_kelamin',
        'alamat',
        'password',
        'level',
    ];

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $table = "user";

    public function Label(){
        return $this->belongsTo(Label::class, "label_id", "id");
    }
}

