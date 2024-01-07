<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientTrip extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id' ,'trip_id','adult_no',
    ];

    public function client(){

        return $this->belongsTo(Client::class,'client_id');

    }

    public function trip(){

        return $this->belongsTo(Client::class,'trip_id');

    }
}
