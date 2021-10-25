<html>
<body>

<h1>List of departments</h1>

<table class="department">
    <tr>
        <th class="header">Name</th>
        <th class="header">Code</th>
        <th class="header">Courses</th>
        <th class="header">Show</th>
    </tr>
    @foreach ($departments as $department)
        <tr>
            <td class="name">{{$department['name']}}</td>
            <td class="code">{{$department['code']}}</td>
            <td class="courses">{{$department->courses->count()}}</td>
            <td ><a class="show" href={{url('/departments', [$department ->id])}}>Show</a></td>
        </tr>
    @endforeach
</table>

<a class="new" href=/departments/create><h2>Create new department</h2></a>


@if (session('message'))
    <div class="success-message">{{session('message')}}</div>
@endif

</body>
</html>

<style>
    .department {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }

    .header, .code, .name, .courses, .show {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .success-message {
        font-family: arial, sans-serif;
    }
</style>
