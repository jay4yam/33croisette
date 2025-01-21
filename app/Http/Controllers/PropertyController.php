<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Repository\PropertyRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function __construct(private PropertyRepository $propertyRepository)
    {
    }

    public function show(Property $property): View
    {
        return view('property.show', compact('property'));
    }
}
