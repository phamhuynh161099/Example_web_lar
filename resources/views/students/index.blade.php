<h1>
    this is list student
</h1>
<a href="{{route('create')}}">
    Add New Student
</a>
<table border="1" width="100%">
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Age</td>
        <td>Gender</td>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->full_name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->genderName}}</td>
        </tr>
    @endforeach
</table>
