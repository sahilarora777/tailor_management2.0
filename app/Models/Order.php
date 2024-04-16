<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customerMeasurements()
    {
        return $this->hasMany(CustomerMeasurement::class);


       
    }
    public function clients(){
        return $this->belongsTo(Client::class,'clients_id');
    }

}
