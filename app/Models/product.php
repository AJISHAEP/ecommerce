<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute ;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     use HasFactory;
     protected $guarded=[];
     protected $table = 'product';
     protected $fillable=[
        'name',
        'price',
        'image',
     ];
    // protected function status():Attribute{
    //     return Attribute::make(
    //         get:fn(string $value)=>($value==1)?"Active" : "Inactive",
    //     );

    // }
    public function catagory(){
        return $this->hasOne(catagory::class,'id','catagory_id');
    }
    public function getStatusTextAttribute(){
        return($this->status==1) ? "Active" : "Inactive";
    }
    public function getFavouriteTextAttribute(){
        return($this->favourite==1) ? "Yes" : "No";
    }
    protected $appends=['status_text','favourite_text'];
}
