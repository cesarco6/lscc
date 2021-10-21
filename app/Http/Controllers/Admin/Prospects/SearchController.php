<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->get('name');
        $phone = $request->get('phone');
        $movil = $request->get('movil');
        $email = $request->get('email');
           

        return view('admin.search.search', ['prospects' => Prospect::orderBy('regis_at','DESC')
                                                ->name($name)
                                                ->phone($phone)
                                                ->movil($movil)
                                                ->email($email)
                                                ->paginate()
                                            ]);
        
    
    }
}
