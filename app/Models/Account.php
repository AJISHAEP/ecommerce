<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table='accounts';
    protected $fillable=[
        'user_id',
        'address1',
        'address2',
        'city',
        'state',
        'pin'
    ];
}
