<tr>
    <td>{{$count}}</td>
    <td>{{ $student->firstname." ".$student->lastname}}</td>
    <td>{{ $student->phone }}</td>
    <td>{{ $student->email }}</td>
    <td></td>
    <td><a href="{{url('/student/'.$student->id.'/show/dashboard')}}" class = "btn btn-primary">View Profile</a></td>
</tr>