<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMeasurement extends Model
{
    use HasFactory;
    protected $fillable = ['clients_id','categories_id','status'];
 

    public function category(){
        return $this->belongsTo(Categorie::class,'categories_id');
    }

    public function clients(){
        return $this->belongsTo(Client::class,'clients_id');
    }

}
