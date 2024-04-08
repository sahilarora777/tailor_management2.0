<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMeasurement extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category(){
        return $this->morphTo();
    }
    public function measurement(){
        return $this->morphTo();
    }
}
