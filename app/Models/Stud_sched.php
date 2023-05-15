<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stud_sched extends Model
{
    use HasFactory;

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
