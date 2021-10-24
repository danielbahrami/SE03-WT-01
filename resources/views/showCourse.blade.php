<html>
<body>
<h1>Course</h1>

<table class="course">
    <tr>
        <th>Department ID</th>
        <th>Name</th>
        <th>Code</th>
        <th>ECTS</th>
        <th>Description</th>
    </tr>
    <tr>
        <td><a class="department" href="{{url('departments', [$course ->department->id])}}">{{$course ->department->name}}</a></td>
        <td class="name">{{$course -> name}}</td>
        <td class="code">{{$course -> code}}</td>
        <td class="ects">{{$course -> ects}}</td>
        <td class="description">{{$course -> description}}</td>
    </tr>
</table>
<a class="edit" href="{{$course['id']."/edit"}}">Edit course</a><br>
<a class="remove" href="{{$course['id']."/delete"}}">Delete course</a>

@if (session('message'))
    <div class="success-message">{{session('message')}}</div>
@endif

</body>
</html>

<style>
    .course {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 70%;
    }
    .department {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .name {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .code {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .ects {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .description {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .success-message {
        font-family: arial, sans-serif;
    }
</style>
