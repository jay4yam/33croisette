<?php

namespace App\Repository;

use App\Models\Property;

class PropertyRepository
{
    public function __construct(private readonly Property $property)
    {
    }

    public function getProperties(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->property->with('pictures', 'floorPlan')
            ->orderBy('floor')
            ->orderBy('title')
            ->get();
    }
}
