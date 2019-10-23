<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderOrder extends Model
{
    protected $table = "provider_orders";

    protected $fillable = ['state', 'date'];

    public function User() {
        return $this->belongsTo('App\User');
    }

    public function Provider() {
        return $this->belongsTo('App\Provider');
    }
}
