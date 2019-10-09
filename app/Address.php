<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "addresses";

    protected $fillable = [
        'id', 'name', 'district', 'street', 'number', 'floor', 'dpto', 'description',
    ];

    public function City() {
        return $this->belongsTo('App\City');
    }
}
