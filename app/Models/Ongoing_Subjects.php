<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ongoing_Subjects extends Model
{
    use HasFactory;

    protected $table = 'ongoing_subjects';
    
    public $timestamps = false;
    
    protected $fillable = [
        'subTitle',
        'subCode',
        'subUnits',
        'sem',
        'subField',
        'schId',
        'subSchool',
    ];

}
