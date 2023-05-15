<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prev_Stud_Scheds extends Model
{
    use HasFactory;

    protected $table = 'prev_stud_scheds';
    
    public $timestamps = false;

    protected $fillable = [
        'profId',
        'profName',
        'schId',
        'schName',
        'subCode',
        'schedDay',
        'startTime',
        'endTime',
        'studCourse',
        'studYear',
        'studSection',
        'sem',
        'totalHours',
        'classroom',
        'sy',
    ];

}
