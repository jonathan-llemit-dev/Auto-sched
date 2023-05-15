<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof_config extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'profId',
        'employment',
        'mode',
        'loadUnit',
        'prefTimeStartSun',
        'prefTimeEndSun',
        'prefTimeStartMon',
        'prefTimeEndMon',
        'prefTimeStartTue',
        'prefTimeEndTue',
        'prefTimeStartWed',
        'prefTimeEndWed',
        'prefTimeStartThu',
        'prefTimeEndThu',
        'prefTimeStartFri',
        'prefTimeEndFri',
        'prefTimeStartSat',
        'prefTimeEndSat',
        'prefModeSun', 
        'prefModeMon',
        'prefModeTue',
        'prefModeWed',
        'prefModeThu',
        'prefModeFri',
        'prefModeSat',
    ];

}
