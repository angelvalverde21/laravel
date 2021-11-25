<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = [ 'id', 'created_at', 'updated_at'];

    //Relacion uno a muchos 

    public function products(){
        return $this->hasMany(Product::class);
    }

    //relacion uno a muchos inversa

    public function category(){
        return $this->belongsTo(Category::class); 
    }


    public function attributes(){
        return $this->hasMany(SubcategoriesAttribute::class); 
    }

    /**** */

    public function subcategoriesAttribute(){
        return $this->hasMany(subcategoriesAttribute::class);
    }

}
