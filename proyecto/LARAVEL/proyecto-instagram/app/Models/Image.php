<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /* Indicamos qué va a estar modificando este modelo ($table es una palabra reservada de
    Eloquent) */
    protected $table = 'images';

    // relación uno a muchos. Esta entidad puede tener muchos comentarios
    public function comments() {
        /* Seria parecido a nuestro select */

        /* hasMany: */
        /* Le decimos a la imagen con qué objeto quiere que trabaje. Esto se hace a través del
        id de image que tambien guardamos en comentarios en la base de datos que va a
        relacionarlos */
        // internamente nos esta haciendo como un innerJoin
        return $this->hasMany('App\Models\Comment');
    }

    public function likes(){

        /* hasMany: */
        // internamente nos esta haciendo como un innerJoin
        return $this->hasMany('App\Models\Like');
    }

    // relación muchos a uno.
    public function user(){
        // el campo con el que se va a relacionar (user_id es el de la image)
        /* belongTo se va encargar de buscar en el objeto user los objetos cuyoid sea igual
        a user_id en la entidad image  */
        return $this->belongsTo('App\Models\User', 'user_id');

    }
}

