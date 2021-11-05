<?php

namespace App\Http\Requests\Prospects;

use Illuminate\Foundation\Http\FormRequest;

class StoreProspectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'seller_id' =>  'nullable',
            'name'  =>  'required',
            'phone' =>  'required',
            'movil' =>  'nullable',
            'email' =>  'nullable',
            'city'  =>  'required',
            'typeofprod'    =>  'required',            
            'review'    =>  'required',
            'regis_at'  =>  'required',
            'address'   =>  'nullable',
            'cp'        =>  'nullable',
            'status'    =>  'nullable',
        ];
    }
}
