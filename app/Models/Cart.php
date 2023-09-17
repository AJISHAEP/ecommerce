<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='carts';
     protected $fillable=[
     'userId',
     'productId',
    'quantity',
    ];
    public function product(){
        return $this->belongsTo(product::class,'productId','id');
        }
}
