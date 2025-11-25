<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Property;
use App\Repository\PropertyRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Matrix\Exception;

class PropertyController extends Controller
{
    public function __construct(private PropertyRepository $propertyRepository)
    {
    }

    public function show(Property $property): View
    {
        return view('property.show', compact('property'));
    }

    /**
     * Gère l'édition d'une propriété
     * @param Property $property
     * @return View
     */
    public function edit(Property $property): View
    {
        $property->load('pictures', 'floorPlan');

        return view('import.edit', compact('property'));
    }

    /**
     * Gère la mise à jour d'une propriété
     * @param Property $property
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Property $property, Request $request): \Illuminate\Http\RedirectResponse
    {
        try{

            $property->fill($request->all())->save();

            return back()->with(['update' => 'property updated successfully']);

        }catch (\Exception $exception){

            Log::error('update property error', ['exception' => $exception->getMessage()]);

            return back()->withInput();
        }
    }

    /**
     * Gère la mise à jour d'une photo d'une propriété
     * @param Picture $picture
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateImage(Picture $picture, Request $request)
    {
        $picture->fill($request->all())->save();

        return back()->with(['update' => 'picture updated successfully']);
    }


    public function updateBulkImage(Request $request, Property $property)
    {
        try{
            $property->pictures()->each(function ($item){
                $item->delete();
            });

            $input_bulk = $request->get('bulk_images');

            $images = explode(",", $input_bulk);

            for($i = 0; $i < count($images); $i++)
            {
                $picture = Picture::create([
                    'url' => trim($images[$i]),
                    'name' => str_replace('https://media.apimo.pro/cache/', '', trim($images[$i])),
                    'rank' => $i,
                    'property_id' => $property->id,
                ]);
            }

            return back()->with(['update' => 'pictures updated successfully']);

        }catch (\Exception $exception){

            Log::error('update property error', ['exception' => $exception->getMessage()]);

            return back()->withInput();
        }
    }
}
