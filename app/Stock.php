<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stocks";

    protected $fillable = ['expiry', 'price'];

    public function Inputs(){
        return $this->belongsTo('App\Input');
    }

    public function Products(){
        return $this->belongsTo('App\Product');
    }

}
