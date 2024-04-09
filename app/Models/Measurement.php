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

  
}
