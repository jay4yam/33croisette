<?php

namespace App\Traits;

use App\Models\FloorPlan;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

trait Uploadable
{
    /**
     * Upload l'image de l'avatar de l'utilisateur
     * @param UploadedFile $file
     * @return void
     */
    public function uploadPlan(UploadedFile $file, int $property_id): void
    {
        //3.1. chemin de stockage du fichier
        $path = storage_path('app/public/plan' );

        //3.2. nom du fichier image
        $fileName = time().'-'.$file->getFilename().'.'.$file->extension();

        //3.3 si le répertoire n'existe pas
        // on le crée
        if(! is_dir($path)) mkdir( $path, 0775, true);

        $image = Image::read($file);

        //3.4. resize et upload du fichier
        $image->save($path.'/'.$fileName);

        //3.5. maj de l'attribut
        FloorPlan::create(
            [
                'name' => $fileName,
                'property_id' => $property_id,
                ]
        );
    }
}
