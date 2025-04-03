<?php

namespace App\Http\Controllers;

use App\Imports\PropertiesImport;
use App\Repository\PropertyRepository;
use App\Traits\Uploadable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Matrix\Exception;

class PropertyImportController extends Controller
{
    use Uploadable;

    public function __construct(private readonly PropertyRepository $propertyRepository)
    {
    }

    /**
     * Affiche la vue d'import du fichier excel apimo
     * @return View
     */
    public function index(): View
    {
        $properties = $this->propertyRepository->getProperties();

        return view('import.index', compact('properties'));
    }

    /**
     * Gère l'import d'un fichier excel
     * @param Request $request
     * @return string
     */
    public function import(Request $request):string
    {
        try {

            Excel::import(new PropertiesImport, $request->file('excel_file'));

        }catch (\Exception $exception){
            return $exception->getMessage();
        }

        return 'import with success';
    }

    /**
     * Gère l'upload des plans de chaque appartement
     * @param Request $request
     * @return RedirectResponse
     */
    public function addPlan(Request $request): RedirectResponse
    {
        try{
            //test le contenu de la requête
            if( $request->has('floorPlan') && $request->has('property_id') ){

                //gère l'upload du fichier
                $this->uploadPlan($request->file('floorPlan'), $request->property_id);
            }

            return back()->with(['message' => 'file uploaded successfully']);

        }catch (\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }
}
