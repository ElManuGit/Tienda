<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    protected $table = "outputs";

    protected $fillable = [
        'quantity', 'date',
    ];

    public function Order() {
        return $this->belongsTo('App\Order');
    }

    public function User() {
        return $this->belongsTo('App\User');
    }

    public function Products() {
        return $this->belongsToMany('App\Products');
    }

    public function States(){
        return $this->belongsToMany('App\State');
    }
}
