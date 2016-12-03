<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['name', 'score', 'description', 'city_id', 'state_id', 'country_id', 'category', 'latitude', 'longitude', 'cost', 'status', 'type'];

    public function images()
    {
        return $this->hasMany('App\ShopImage');
    }

    public function comments()
    {
        return $this->hasMany('App\ShopComment');
    }
}
