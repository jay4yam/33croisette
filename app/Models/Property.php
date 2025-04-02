<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = [
        'status',
        'reference',
        'type',
        'address',
        'residence',
        'postal_code',
        'city',
        'price',
        'rooms',
        'bedrooms',
        'area',
        'floor',
        'title',
        'description'
        ];

    public function pictures()
    {
        return $this->hasMany(Picture::class)->orderBy('rank', 'desc');
    }

    public function picture()
    {
        return $this->hasOne(Picture::class)->orderBy('rank', 'desc');
    }
}
