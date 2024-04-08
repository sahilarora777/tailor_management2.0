<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Measurement extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(Categorie::class,'categories_id');
    }
    public function measurement(){
        return $this->belongsTo(Measurement::class,'measurements_id');
    }
}
