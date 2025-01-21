<?php

namespace App\Http\Controllers;

use App\Imports\PropertiesImport;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PropertyImportController extends Controller
{
    /**
     * Affiche la vue d'import du fichier excel apimo
     * @return View
     */
    public function index(): View
    {
        return view('import.index');
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
}
