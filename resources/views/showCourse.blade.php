<html>
<body>
<h1>Course</h1>

<table class="course">
    <tr>
        <th class="department">Department ID</th>
        <th class="name">Name</th>
        <th class="code">Name</th>
        <th class="ects">ECTS</th>
        <th class="description">Description</th>
    </tr>
    <tr>
        <td class="department">{{$course -> department_id}}</td>
        <td class="name">{{$course -> name}}</td>
        <td class="code">{{$course -> code}}</td>
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
    .department {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 70%;
    }

    .name {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    code {
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
