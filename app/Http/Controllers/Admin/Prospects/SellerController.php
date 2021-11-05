<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Models\Seller;
use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    public function index()
    {
        /*Show all the prospects and manage them [
            'prospects' =>  Prospect::latest()->paginate(5),
            'seller'   =>  Seller::latest()
        ]  */
        //$prospects = Prospect::latest()->paginate(5);
        $nomt = Prospect::all()->count();

        $sellers = Seller::all();
        return view('admin.sellers.index', compact('sellers','nomt'));
        
                                                    
        //dd($prospects);
    }
}
