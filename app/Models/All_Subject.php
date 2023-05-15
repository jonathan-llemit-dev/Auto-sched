<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class All_Subject extends Model
{
    use HasFactory;

    protected $table = 'all_subjects';
    
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
