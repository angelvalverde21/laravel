<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategoriesAttribute extends Model
{
    use HasFactory;

    public function nameAttributes(){
        return $this->belongsTo(nameAttribute::class,'attribute_id'); 
    }
    
    public function sizegroups(){
        return $this->belongsToMany(Sizegroup::class,'subcategory_id'); 
    }
}
