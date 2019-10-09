<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";

    protected $fillable = [
        'lastName', 'birth_Date','picture', 'phone1', 'phone2',
        'state', 'identity_number'
    ];

    public function Address() {
        return $this->belongsTo('App\Address');
    }

    public function User() {
        return $this->belongsTo('App\User');
    }

    public function Orders() {
        return $this->hasMany('App\Order');
    }

    public function IdentityType() {
        return $this->belongsTo('App\IdentityType');
    }
}
