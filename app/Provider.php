<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'id', 'name', 'lastName', 'email', 'company', 'phone1', 'phone2', 'others', 'state'
    ];


    public function ProviderOrders() {
        return $this->hasMany('App\ProviderOrder');
    }

    public function BrandProducts() {
        return $this->belongsToMany('App\BrandProduct');
    }

    public function Address() {
        return $this->belongsTo('App\Address');
    }
}
