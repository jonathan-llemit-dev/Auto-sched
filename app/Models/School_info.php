<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class School_info extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'schName',
        'email',
        'email_verified_at',
        'contactNumber',
        'region',
        'regionCode',
        'city',
        'cityCode',
        'barangay',
        'barangayCode',
        'street',
        'coordinatorId',
        'schLogo'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
