<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof_handle extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'profId',
        'profSchool',
        'subTitle',
        'subCode',
        'subUnits',
        'studCourse',
        'studYear',
        'studSection',
    ];

}
