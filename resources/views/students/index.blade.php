@extends('layout')

@section('content')
<h1>Student List</h1>

<a href="/students/create">
    <button>Add New Student</button>
</a>

<table>
    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Year Level</th>
        <th>Actions</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student['name'] }}</td>
        <td>{{ $student['course'] }}</td>
        <td>{{ $student['year'] }}</td>
        <td>
            <a href="/students/{{ $student['id'] }}">View</a> |
            <a href="/students/{{ $student['id'] }}/edit">Edit</a>
        </td>
    </tr>
    @endforeach

</table>
@endsection
