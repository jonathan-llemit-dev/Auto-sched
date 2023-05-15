<div>   

    {{-- <img src="{{ public_path('image/logo-main.png') }}" > --}}

   {{-- <h1>ROOM</h1>{{ $roomNumber }} --}}

    <table>

        <tr>
            <th>Course</th>
            <th>Year-Section</th>
            <th>Subject Code</th>
            <th>Professor's</th>
            <th>Room</th>
            <th>Day</th>
            <th>Time</th>
        </tr>
    
        @foreach ($coorClassSchedules as $newCoorClassSchedules)
            <tr>
                <td>{{ $newCoorClassSchedules->studCourse }}</td>
                <td>{{ $newCoorClassSchedules->studYear."". $newCoorClassSchedules->studSection}}</td>
                <td>{{ $newCoorClassSchedules->subCode }}</td>
                <td>{{ $newCoorClassSchedules->profName }}</td>
                <td>{{ $newCoorClassSchedules->classroom }}</td>
                <td>{{ $newCoorClassSchedules->schedDay }}</td>
                <td>{{ $newCoorClassSchedules->totalHours }}</td>
                <td>{{ $newCoorClassSchedules->startTime." ".$newCoorClassSchedules->endTime }}</td>
            </tr>
        @endforeach
        
    </table>

</div>