<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "addresses";

    protected $fillable = [
        'id', 'nameAddress', 'district', 'street', 'number', 'floor', 'dpto', 'description', 'city_id',
    ];

    public function City() {
        return $this->belongsTo('App\City');
    }

    public function Users() {
        return $this->hasMany('App\User');
    }

    public function Providers() {
        return $this->hasMany('App\Provider');
    }

    public function Orders() {
        return $this->hasMany('App\Order');
    }
}
