<div>   
{{-- 
    <img src="{{ public_path('image/logo-main.png') }}" >

   <h1>ROOM</h1>{{ $roomNumber }} --}}

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
        </tr>
    
        @foreach ($coorRoomSchedules as $newCoorRoomSchedules)
            <tr>
                <td>{{ $newCoorRoomSchedules->profName }}</td>
                <td>{{ $newCoorRoomSchedules->subCode }}</td>
                <td>{{ $newCoorRoomSchedules->schedDay }}</td>
                <td>{{ $newCoorRoomSchedules->studCourse }}</td>
                <td>{{ $newCoorRoomSchedules->studYear }}</td>
                <td>{{ $newCoorRoomSchedules->studSection }}</td>
                <td>{{ $newCoorRoomSchedules->totalHours }}</td>
                <td>{{ $newCoorRoomSchedules->startTime." ".$newCoorRoomSchedules->endTime }}</td>
            </tr>
        @endforeach
        
    
    </table>
</div>