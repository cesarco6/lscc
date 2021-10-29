<?php

namespace App\Imports;

use App\Models\Prospect;
use Maatwebsite\Excel\Concerns\ToModel;

class ProspectsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Prospect([
            'seller_id' =>  $row[0],
            'name'  =>  $row[1],
            'phone' =>  $row[2],
            'movil' =>  $row[3],
            'typeofprod'    =>  $row[4],
            'city'  =>  $row[5],           
            'review'    =>  $row[6],
            'email' =>  $row[7],
            'regis_at'  =>  $row[8],  
            'address'   =>  $row[9],  
            'cp'        =>  $row[10],
            'status'    =>  $row[11],    
        ]);
    }
}
