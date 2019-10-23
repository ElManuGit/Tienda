<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model
{
    protected $table = "brand_products";

    protected $fillable = [
        'id', 'name',
    ];

    public function Products() {
        return $this->hasMany('App\Product');
    }

    public function Providers() {
        return $this->belongsToMany('App\Provider');
    }
}
