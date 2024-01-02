<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['from' , 'passengers' ,'to' , 'price_adult' , 'child_price' ,'tack_off_time' , 'arriving_time'];

    public function fromCity(){

        return $this->belongsTo(City::class,'from');

    }

    public function toCity(){

        return $this->belongsTo(City::class,'to');
        
    }
}
