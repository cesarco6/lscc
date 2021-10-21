<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Models\Seller;
use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Prospects\StoreProspectRequest;

class ProspectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Show all the prospects and manage them [
            'prospects' =>  Prospect::latest()->paginate(5),
            'seller'   =>  Seller::latest()
        ]  */
        $prospects = Prospect::latest()->paginate();
        $nomt = Prospect::all();
        return view('admin.prospects.index', compact('prospects', 'nomt'));
        
                                                    
        //dd($prospects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = Seller::all();
        return view('admin.prospects.create',compact('sellers')); 
        // Go to the prospects creation form
        //return view('admin.prospects.create', compact('sellers'));
        //dd($sellers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProspectRequest $request)
    {
        // store prospect
        //return $request->validated();
        
        $prospect = Prospect::create($request->only('seller_id','name','phone','movil','email','city','typeofprod','review','regis_at'));               
        return redirect()->route('admin.prospects.dashboard')->with('success', 'Prospecto creado con éxito.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
