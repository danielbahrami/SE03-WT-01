<html>
<style>
    .course {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 70%;
    }

    .code {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .name {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .ects {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .department {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .show {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    .success-message {
        font-family: arial, sans-serif;
    }

</style>
<body>
<h1>List of courses</h1>

@if (session('message'))
    <div class="success-message">{{session('message')}}</div>
@endif

<table class="course">
    <tr>
        <th class="department">Department ID</th>
        <th class="code">Code</th>
        <th class="name">Name</th>
        <th class="ects">ECTS</th>
        <th class="show">Show</th>
    </tr>
    @foreach ($courses as $course)
        <tr>
            <td class="department">{{$course['department_id']}}</td>
            <td class="code">{{$course['code']}}</td>
            <td class="name">{{$course['name']}}</td>
            <td class="ects">{{$course['ects']}}</td>
            <td class="show"><a href={{url('/courses', [$course ->id])}}>Show</a></td>
        </tr>
    @endforeach
</table>

<a class="new" href=/courses/create><h2>Create new course</h2></a>
</div>
</body>
