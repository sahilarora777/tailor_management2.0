<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clients(){
        return $this->belongsTo(Client::class,'clients_id');
    }

    public function category(){
        return $this->belongsTo(Categorie::class,'categories_id');
    }

    
    public function category_measurment()
    {
        return $this->hasOne(Category_Measurement::class, 'category_measurements_id');
    }
}
