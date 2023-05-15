<?php

namespace App\Exports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SubjectExport implements FromCollection,WithHeadingRow
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array{

        return[

            'subTitle',
            'subCode',
            'subUnits',
            'subField'

        ];

    }

    public function collection()
    {
        return Subject::all();
    }
    
}
