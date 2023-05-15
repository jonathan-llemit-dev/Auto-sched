<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Prof_info extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'prof';

    protected $table = 'prof_infos';
    
    public $timestamps = false;
    
    protected $fillable = [
        'profFName',
        'profLName',
        'email',
        'contactNumber',
        'profDept',
        'profField',
        'profSchool',
        'password',
        'profPic'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'profField' => 'array',
    ];

}
