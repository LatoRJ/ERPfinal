<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'user_id'; // Custom primary key

    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'gender',
        'email',
        'password',
        'Contact_Number',
        'Line_Address_1',
        'Line_Address_2',
        'Barangay',
        'Municipality',
        'City',
        'Postal_Code',
        'Role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
