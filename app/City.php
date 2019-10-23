<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";

    protected $fillable = [
        'name', 'cp',
    ];

    public function Province() {
        return $this->belongsTo('App\Province');
    }

    public function Addresses() {
        return $this->hasMany('App\Address');
    }
}
