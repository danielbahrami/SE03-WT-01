<html>
<body>

<h1>Course</h1>

<table class="course">
    <tr>
        <th class="header">Department</th>
        <th class="header">Name</th>
        <th class="header">Code</th>
        <th class="header">ECTS</th>
        <th class="header">Description</th>
    </tr>
    <tr>
        <td><a class="department"
               href="{{url('departments', [$course -> department -> id])}}">{{$course -> department -> name}}</a></td>
        <td class="name">{{$course -> name}}</td>
        <td class="code">{{$course -> code}}</td>
        <td class="ects">{{$course -> ects}}</td>
        <td class="description">{{$course -> description}}</td>
    </tr>
</table>

<a class="edit" href="{{$course['id'] . "/edit"}}">Edit course</a>
<br>
<a class="remove" href="{{$course['id'] . "/delete"}}">Delete course</a>

@if (session('message'))
    <div class="success-message">{{session('message')}}</div>
@endif

</body>
</html>

<style>

    .course {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }

    .header, .department, .name, .code, .description, .ects {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .success-message {
        font-family: arial, sans-serif;
    }

</style>
