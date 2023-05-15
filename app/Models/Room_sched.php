<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_sched extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'profId',
        'profName',
        'profSchool',
        'roomSchool',
        'roomNumber',
        'subCode',
        'schedDay',
        'startTime',
        'endTime',
        'studCourse',
        'studYear',
        'studSection',
        'sem',
        'totalHours',
        'sy',
    ];

}
