<html>
<body>

<h1>Courses</h1>

<table class="course">
    <tr>
        <th class="header">Department</th>
        <th class="header">Name</th>
        <th class="header">Code</th>
        <th class="header">ECTS</th>
        <th class="header">Show</th>
    </tr>
    @foreach ($courses as $course)
        <tr>
            <td><a class="department"
                   href="{{url('departments', [$course -> department -> id])}}">{{$course -> department -> name}}</a>
            </td>
            <td class="name">{{$course['name']}}</td>
            <td class="code">{{$course['code']}}</td>
            <td class="ects">{{$course['ects']}}</td>
            <td><a class="show" href={{url('/courses', [$course -> id])}}>Show</a></td>
        </tr>
    @endforeach
</table>

<a class="new" href=/courses/create><h2>Create course</h2></a>

@if (session('message'))
    <div class="success-message">{{session('message')}}</div>
@endif

</body>
</html>

<style>

    .course {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 0%;
    }

    .header, .department, .name, .code, .ects, .show {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .success-message {
        font-family: arial, sans-serif;
    }

</style>
