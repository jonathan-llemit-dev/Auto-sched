<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stud_class extends Model
{
    use HasFactory;

    protected $table = 'stud_classes';

    public $timestamps = false;

    protected $fillable = [
        'studCourse',
        'studYear',
        'studSection',
        'firstSemSub',
        'secondSemSub',
    ];

}
