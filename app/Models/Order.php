<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
     protected $table = 'orders';
     protected $fillable=[
        'address1',
        'address2',
        'state',
        'city',
        'pin',
}
