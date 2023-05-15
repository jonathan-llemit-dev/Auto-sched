<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prev_Room_Scheds extends Model
{
    use HasFactory;

    protected $table = 'prev_room_scheds';
    
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
