<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        
    ];

    public function nices(){
        return $this->hasMany('App\Models\Nice');
    }

    public function reservations(){
        return $this->hasMany('App\Models\Reservation');
    }
}
