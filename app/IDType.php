<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IDType extends Model
{
    protected $table = "i_d_types";

    protected $fillable = [
        'name',
    ];

    public function Users() {
        return $this->hasMany('App\User');
    }
}
