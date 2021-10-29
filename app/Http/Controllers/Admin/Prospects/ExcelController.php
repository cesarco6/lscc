<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Imports\ProspectsImport;
use Psy\Exception\ErrorException;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\QueryException;

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
        //$prospectsant = Prospect::all();
        $file = $request->file('file');
    
        try{
            Excel::import(new ProspectsImport, $file);
        }catch (QueryException $ex) {               
                return back()->withErrors('Ocurrió un problema en la base de datos al subir el archivo.');        
        }catch(\InvalidArgumentException $ex){
                return back()->withErrors('Ocurrió un problema con el formato de fecha.');  
        }catch(\Exception $ex){ 
            return back()->withErrors('Ocurrió un problema, checa el archivo.');  
        }catch(\Error $ex){
            return back()->withErrors($ex->getMessage());  
        }
    
        //$prospects = Prospect::latest()->paginate(5);               
        //return back()->with('message', 'Importación de archivo completada',compact());
        return redirect()->route('admin.prospects.dashboard')->with('success', 'Importación de archivo completada.');
    }
}