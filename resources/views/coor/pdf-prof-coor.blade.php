<div>   

    {{-- <img src="{{ public_path('image/logo-main.png') }}" > --}}

        <table>

        <tr>
            <th>Professor Name</th>
            <th>Subject Code</th>
            <th>Day</th>
            <th>Course</th>
            <th>Year</th>
            <th>Section</th>
            <th>Units</th>
            <th>Time</th>
            <th>ClassRoom</th>
        </tr>
    
        @foreach ($coorProfSchedules as $newCoorProfSchedules)
            <tr>
                <td>{{ $newCoorProfSchedules->profName }}</td>
                <td>{{ $newCoorProfSchedules->subCode }}</td>
                <td>{{ $newCoorProfSchedules->schedDay }}</td>
                <td>{{ $newCoorProfSchedules->studCourse }}</td>
                <td>{{ $newCoorProfSchedules->studYear }}</td>
                <td>{{ $newCoorProfSchedules->studSection }}</td>
                <td>{{ $newCoorProfSchedules->totalHours }}</td>
                <td>{{ $newCoorProfSchedules->startTime." ".$newCoorProfSchedules->endTime }}</td>
                <td>{{ $newCoorProfSchedules->classroom }}</td>
            </tr>
        @endforeach
        
    
    </table>
</div>