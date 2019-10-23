<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id', 'name', 'description', 'barCode', 'ingredients', 'size', 'available', 'weight', 'nutritionalInformation', 'country_id', 'brand_product_id', 'provider_id'
    ];

    // Atributos del modelo producto: ID, Name, BarCode, Picture, Description, Ingredients, Size, Available, Weight, Picture, Nutritional Information
    //Atributos foraneos: Category_ID, BrandProduct_ID, Country_ID

    public function Country(){
        return $this->belongsTo('App\Country');
    }

    public function Categories(){
        return $this->belongsToMany('App\Category');
    }

    public function BrandProduct(){
        return $this->belongsTo('App\BrandProduct');
    }

    public function Stock(){
        return $this->belongsTo('App\Stock');
    }

    public function Inputs(){
        return $this->belongsToMany('App\Input');
    }

    public function Outputs(){
        return $this->belongsToMany('App\Output');
    }

    public function Orders(){
        return $this->belongsToMany('App\Order');
    }

    public function ProviderOrders(){
        return $this->belongsToMany('App\ProviderOrder');
    }

    public function Provider(){
        return $this->belongsTo('App\Provider');
    }

    public function Pictures(){
        return $this->hasMany('App\Picture');
    }

}
