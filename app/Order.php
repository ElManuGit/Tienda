<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'id', 'date', 'state', 'address'
    ];

    public function Address() {
        return $this->belongsTo('App\Address');
    }

    public function User() {
        return $this->belongsTo('App\User');
    }
}
