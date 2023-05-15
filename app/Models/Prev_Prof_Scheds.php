<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prev_Prof_Scheds extends Model
{
    use HasFactory;

    protected $table = 'prev_prof_scheds';
    
    public $timestamps = false;

    protected $fillable = [
        'profId',
        'profName',
        'profSchool',
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
