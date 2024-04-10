<?php

namespace App\Models;

use App\Http\Controllers\CategoryMeasurementController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    
    protected $guarded = [];
   
    public function product()
    {
        return $this->hasOne(Product::class, 'product_id');
    }
    
    public function customer_measurement()
    {
        return $this->hasOne(CustomerMesaurement::class, 'customer_measurement_id');
    }
   
    
    public function measurement(){
        return $this->belongsTo(Measurement::class,'measurements_id');
    }
}
