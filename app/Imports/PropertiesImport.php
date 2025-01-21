<?php

namespace App\Imports;

use App\Models\Picture;
use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\PersistRelations;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PropertiesImport implements ToModel, WithHeadingRow, PersistRelations
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row): Model|Property|null
    {
        $property = new Property([
            'status' => 'available',
            'reference' => $row['reference'],
            'type' => $row['type'],
            'address' => $row['adresse'],
            'residence' => $row['residence'],
            'postal_code' => $row['code_postal'],
            'city' => $row['ville'],
            'price' => $row['prix'],
            'rooms' => $row['pieces'],
            'bedrooms' => $row['chambres'],
            'area' => $row['surface'],
            'floor' => $row['etage'],
            'title' => $row['titre_en'],
            'description' => $row['commentaire_en'],
        ]);

        $property->save();

        $pictures = $row['photos'];

        $array_pictures = explode(',', $pictures);

        $rank = 1;

        foreach ($array_pictures as $photo)
        {
            $property->pictures()->save(
                new Picture([
                    'url' => $photo,
                    'name' => str_replace('https://media.apimo.pro/cache/', '', $photo),
                    'rank' => $rank
                ]));

            $rank++;
        }

        return $property;
    }
}
