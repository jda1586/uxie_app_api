<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Shop
 *
 * @property int $id
 * @property int $owner_id
 * @property int $user_id
 * @property string $name
 * @property int $category_id
 * @property string $street
 * @property string $outside_number
 * @property string $inside_number
 * @property string $postal_code
 * @property string $phone
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property float $latitude
 * @property float $longitude
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Category $category
 * @property-read \App\User $owner
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereCityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereCountryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereInsideNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereOutsideNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereOwnerId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop wherePostalCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereStreet($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereUserId($value)
 * @mixin \Eloquent
 */
class Shop extends Model
{
    protected $fillable = [
        'user_id', 'owner_id', 'name', 'category_id', 'street', 'outside_number', 'inside_number',
        'postal_code', 'phone', 'country_id', 'state_id', 'city_id', 'latitude', 'longitude', 'status'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
