<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model
{
    protected $table = "brand_products";

    protected $fillable = [
        'id', 'name',
    ];

    public function Product() {
        return $this->belongsToMany('App\Product');
    }
}
