<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'id', 'name', 'description'
    ];

    public function Product() {
        return $this->belongsToMany('App\Product');
    }
}
