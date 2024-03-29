<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopComment extends Model
{
    protected $fillable = ['shop_id', 'user_id', 'comment'];

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
