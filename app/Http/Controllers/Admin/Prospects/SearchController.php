<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Models\User;
use App\Models\Prospect;
use Illuminate\Http\Request;
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
                                                ->paginate(8),
                                            'users' =>  User::all()
                                            ]);
        
    
    }

    public function prosen()
    {
        return view('admin.search.prosen');
    }
}
