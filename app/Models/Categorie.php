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
    public function category_measurment()
    {
        return $this->hasOne(Category_Measurement::class, 'category_measurements_id');
    }
}
