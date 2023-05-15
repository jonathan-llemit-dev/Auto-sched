<?php

namespace App\Imports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubjectsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $row)
    {

        //getting school name from school_infos
        $schoolName = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        //getting school id from school_infos
        $schoolId = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('id');
        
        return new Subject([

            'subTitle'  =>  $row['subtitle'],
            'subCode'   =>  $row['subcode'],
            'subUnits'  =>  $row['units'], 
            'subField'  =>  $row['subfield'], 
            'schId' =>  $schoolId, 
            'subSchool' =>  $schoolName, 

        ]);
    }
}
