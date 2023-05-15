<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class All_Class extends Model
{
    use HasFactory;

    protected $table = 'all_class';
    
    public $timestamps = false;
    
    protected $fillable = [
        'course',
        'year',
        'section',
        'schId',
        'schName',
        'hasSched'
    ];

}
