<?php

namespace App\Http\Controllers\Admin\Prospects;

use Illuminate\Http\Request;
use App\Imports\ProspectsImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function fileinte()
    {
        return view('admin.prospects.importex');
    }

    public function exportFile()
    {
        
    }

    public function loadFile(Request $request)
    {
       
        $file = $request->file('file');
        try{
            Excel::import(new ProspectsImport, $file);
        } catch (\Illuminate\Database\QueryException $e) {
            //$error_code = $e->errorInfo[1];
            return back()->withErrors('Ocurrió un problema al subir el archivo, ¡checa los campos que no fueron llenados!');
        }
                        
        //return back()->with('message', 'Importación de archivo completada');
        return redirect()->route('admin.prospects.dashboard')->with('success', 'Importación de archivo completada.');
    }
}