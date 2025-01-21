<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'pictures';

    protected $fillable = ['url', 'name', 'rank', 'property_id'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
