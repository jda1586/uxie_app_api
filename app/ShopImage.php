<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopImage extends Model
{
    protected $fillable = ['shop_id', 'path', 'file', 'system'];

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
