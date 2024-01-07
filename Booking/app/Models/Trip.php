<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['price_adult' , 'price_child' ,'from' , 'to' , 'leaving_date' ,'arriving_date' , 'passengers'];

    public function fromCity(){

        return $this->belongsTo(City::class,'from');

    }

    public function toCity(){

        return $this->belongsTo(City::class,'to');
        
    }
}
