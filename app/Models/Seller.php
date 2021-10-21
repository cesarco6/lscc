<?php

namespace App\Models;

use App\Models\Prospect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasFactory;    

    //protected $guarded = ["id"];
    protected $table = "sellers";

    protected $fillable = [
        'name','email'
    ];

    public function prospects()
    {
        return $this->hasMany(Prospect::class);
    }

}
