<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";

    protected $fillable = [
        'name',
    ];

    public function Provinces() {
        return $this->hasMany('App\Province');
    }

    public function Products() {
        return $this->hasMany('App\Product');
    }
}
