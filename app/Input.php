<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $table = "inputs";

    protected $fillable = [
        'ticketNumber', 'date', 'state'
    ];

    public function Provider() {
        return $this->belongsTo('App\Provider');
    }

    public function Order() {
        return $this->belongsTo('App\Order');
    }

    public function Products() {
        return $this->belongsToMany('App\Products');
    }
}
