<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMeasurement extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Categorie::class,'category_id');
    }

    public function measurement(){
        return $this->belongsTo(Measurement::class,'measurement_id');
    }
}
