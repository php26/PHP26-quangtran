<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cat extends Model
{
	use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'dob','breed_id',
    ];

    public function scopeIsBirthday($query)
    {
    	return $query->where('dob', '>=', date('Y-m-d'));
    }
}
