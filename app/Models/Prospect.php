<?php

namespace App\Models;

use App\Models\Seller;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ProspectsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prospect extends Model
{
    use HasFactory;

    //protected $guarded = ["id"];
    protected $table = "prospects";

    protected $fillable = [
        'seller_id','name','phone','movil','typeofprod',
        'city','review','email','address','cp','regis_at','status'
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

   
    protected static function newFactory(): ProspectsFactory {
        return ProspectsFactory::new();
    }

    public function scopeName($query, $name)
    {
        if($name)
        {
            return $query->where('name', 'LIKE', "%$name%");
        }
    }
    public function scopePhone($query, $phone)
    {
        if($phone)
        {
            return $query->where('phone', 'LIKE', "%$phone%");
        }
    }
    public function scopeMovil($query, $movil)
    {
        if($movil)
        {
            return $query->where('movil', 'LIKE', "%$movil%");
        }
    }
    public function scopeEmail($query, $email)
    {
        if($email)
        {
            return $query->where('email', 'LIKE', "%$email%");
        }
    }
    
}
