<tr>
    <td>{{ $count }}</td>
    <td>{{ $teacher->firstName." ".$teacher->lastName}}</td>
    <td>{{ $teacher->phone }}</td>
    <td>{{ $teacher->course }}</td>
    <td>${{ $teacher->price }}/hr</td>
    <td><a href="{{url('/teacher/'.$teacher->id.'/show/private')}}" class = "btn btn-primary">View Profile</a></td>
</tr>
