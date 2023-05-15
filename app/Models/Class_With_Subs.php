<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_With_Subs extends Model
{
    use HasFactory;

    protected $table = 'class_with_subs';
    
    public $timestamps = false;
    
    protected $fillable = [
        'course',
        'year',
        'section',
        'subject_code',
        'subject_title',
        'subject_units',
        'sem',
        'schId',
        'schName'
    ];

}
