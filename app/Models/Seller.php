<?php

namespace App\Models;

use App\Models\User;
use App\Models\Prospect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasFactory;    

    //protected $guarded = ["id"];
    protected $table = "sellers";

    protected $fillable = [
        'user_id','nivel'
    ];

    public function prospects()
    {
        return $this->hasMany(Prospect::class);
    }
    
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
}
