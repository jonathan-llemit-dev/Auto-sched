
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
    
        @foreach ($profSchedules as $newProfSchedules)
            <tr>
                <td>{{ $newProfSchedules->studCourse }}</td>
                <td>{{ $newProfSchedules->studYear."". $newProfSchedules->studSection}}</td>
                <td>{{ $newProfSchedules->subCode }}</td>
                <td>{{ $newProfSchedules->profName }}</td>
                <td>{{ $newProfSchedules->classroom }}</td>
                <td>{{ $newProfSchedules->schedDay }}</td>
                <td>{{ $newProfSchedules->totalHours }}</td>
                <td>{{ $newProfSchedules->startTime." ".$newProfSchedules->endTime }}</td>
            </tr>
        @endforeach
        
    </table>

</div>
