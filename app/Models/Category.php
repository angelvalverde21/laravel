<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //$fillable define los campos que queremos habilitar para realizar operaciones sql

    protected $fillable = ['name','slug','image','icon'];

    /* Relacion uno a muchos */

    public function subcategories(){

        return $this->hasMany(Subcategory::class);

    }

    /* Relacion uno a muchos a traves de */
    public function products(){

        return $this->hasManyThrough(Product::class, Subcategory::class);

        /* El primer argumento es la tabla del modelo que queremos obtener la informacion o relacion
        y el segundo argumento es la tabla intermedia por la cual relacionaremos */

    }
}
