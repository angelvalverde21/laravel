<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategorieAttribute extends Model
{
    use HasFactory;

    public function nameAttributes(){
        return $this->hasMany(nameAttribute::class); 
    }
    
}
