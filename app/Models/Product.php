<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Esto quiere decir que se pueden acceder a todas las propiedades excepto a 'id', 'created_at', 'updated_at'
    protected $guarded = [ 'id', 'created_at', 'updated_at'];

    const BORRADOR = 1;
    const PUBLICADO = 2;

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function fotos(){
        return $this->hasMany(Multimedia::class)->where('media_type',MULTIMEDIA::TYPE_FOTO);
    }
    
    public function colores(){
        return $this->hasMany(Multimedia::class)->where('media_type',MULTIMEDIA::TYPE_COLOR);
    }
     
    public function sesionesFotos(){
        return $this->hasMany(Multimedia::class)->where('media_type',MULTIMEDIA::TYPE_SESION_FOTO);
    }   

    //RELACION UNO A MUCHOS POLIMORFICA



}
