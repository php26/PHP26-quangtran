<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'category_id'
    ];

    public function orders()
    {
        return $this->hasManyThrough('App\Order', 'App\OrderItem');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
