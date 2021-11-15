<?php

namespace App\Http\Controllers\Admin\Prospects;


use App\Models\User;
use App\Models\Seller;
use App\Models\Prospect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        //$prospects = Prospect::latest()->paginate(3);
        $prospects = DB::table('prospects')->latest()->limit(5)->get();

                                                        
        $nomt = Prospect::prospact();        
        $sellers = Seller::all();
        
        return view('admin.prospects.index', compact('prospects', 'sellers','nomt'));
        
                                                    
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
        //$users = User::all();
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
        
        $prospect = Prospect::create($request->only('seller_id','name','phone','movil','email','city','typeofprod'
                                                    ,'review','regis_at','address','cp', 'status'));               
        return redirect()->route('admin.prospects.dashboard')->with('success', 'Prospecto creado con éxito.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prospect $prospect)
    {

        return view('admin.prospects.show', compact('prospect'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospect $prospect)
    {
        //$prospect = Prospect::find($id);
        $sellers = Seller::all();
        return view('admin.prospects.edit', compact('prospect', 'sellers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospect $prospect)
    {
        /*
        $rules = [
            'review' => 'required|min:200',
            'status' => 'required'
        ];
        $messages = [
            'review.required' =>  'Es necesario ingresar una revision.',
            'status'    =>  'extensa mínimo 200 caracteres.'
        ];
        $this->validation($request, $rules, $messages);
        
        $prospect->review = $request->input('review');
        $prospect->regis_at = $request->input('regis_at');
        $prospect->status = $request->input('status');
        */
        //dd($request);
        
        $prospect->update($request->all());

        //$prospect->save($request->only('review','regis_at','status'));         
        return redirect()->route('admin.prospects.show',compact('prospect'))->with('success', 'Prospecto actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospect $prospect)
    {
        $nombredproselim = $prospect->name;
        $prospect->delete();

        $notif = 'El Prospecto '. $nombredproselim.' se ha eliminado correctamente.';
        return redirect()->route('admin.prospects.indexpro')->with('success', $notif);
    }



}
