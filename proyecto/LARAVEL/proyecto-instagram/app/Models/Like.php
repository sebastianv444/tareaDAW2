<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';

    // qué likes ha hecho un usuario
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    //likes hechos a una imagen
    public function image(){
        return $this->belongsTo('App\Models\Image','user_id');
    }
}
