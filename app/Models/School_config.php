<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_config extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'coordinatorId',
        'schId',
        'schName',
        'mode',
        'sem',
        'autoRoom',
        'allocationWay',
        'schTimeStartSun',
        'schTimeEndSun',
        'schTimeStartMon',
        'schTimeEndMon',
        'schTimeStartTue',
        'schTimeEndTue',
        'schTimeStartWed',
        'schTimeEndWed',
        'schTimeStartThu',
        'schTimeEndThu',
        'schTimeStartFri',
        'schTimeEndFri',
        'schTimeStartSat',
        'schTimeEndSat',
    ];

}
