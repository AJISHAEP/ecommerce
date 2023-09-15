<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table="users";

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($user) {
            // Clean and update the phone_number column
            $user->phone = preg_replace("/[^0-9]/", "", $user->phone);
        });
    }
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'phone',
        // 'address1',
        // 'address2',
        // 'city',
        // 'state',
        // 'pin',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
   // User model
// User.php (User model)
public function addresses()
{
    return $this->hasMany(Address::class);
}



}
