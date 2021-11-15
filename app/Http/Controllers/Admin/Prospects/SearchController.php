<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Support\Collection;
use App\Models\User;
use App\Models\Prospect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //$users = User::all();
        
        $name = $request->get('name');
        $phone = $request->get('phone');
        $movil = $request->get('movil');
        $email = $request->get('email');
        /*
        $prospects = Prospect::orderBy('regis_at','DESC')->name($name)
        ->phone($phone)
        ->movil($movil)
        ->email($email);           
        dd($prospects);
        */
       return view('admin.search.search', ['prospects' => Prospect::orderBy('regis_at','DESC')
                                                ->name($name)
                                                ->phone($phone)
                                                ->movil($movil)
                                                ->email($email)
                                                ->cursorPaginate(),
                                            'users' =>  User::all()
                                            ]);
        
    
    }

    public function prosen()
    {
        
        $fia1 = Prospect::select('name')        
        ->groupBy('name')
        ->havingRaw('count(*) > 1');

               
        $cnm = Prospect::whereIn('name', $fia1)
                        ->orderBy('name', 'ASC')
                        ->get();       
        //dd($fia2);
        return view('admin.search.prosen', compact('cnm'));
    }
}
