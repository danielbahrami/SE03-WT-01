<html>
<style>
    .department, .course {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }
    .header, .code, .name, .description, .ects, .show {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .success-message {
        font-family: arial, sans-serif;
    }

</style>
<body>
<h1>Show department</h1>

<table class="department">
    <tr>
        <th class="header">Name</th>
        <th class="header">Code</th>
        <th class="header">Description</th>
    </tr>
        <tr>
            <td class="code">{{$department -> name}}</td>
            <td class="name">{{$department -> code}}</td>
            <td class="description">{{$department -> description}}</td>
        </tr>

</table>
<a class="edit" href="{{$department['id']."/edit"}}">Edit department</a><br>
<a class="remove" href="{{$department['id']."/delete"}}">Delete department</a>

<div>
    <h1>Show connected courses</h1>

    <table class="course">
        <tr>
            <th class="header">Name</th>
            <th class="header">Code</th>
            <th class="header">ECTS</th>
            <th class="header">Show</th>
        </tr>
        @foreach($department-> courses as $course)
        <tr>

            <td class="code">{{$course -> name}}</td>
            <td class="name">{{$course -> code}}</td>
            <td class="ects">{{$course -> ects}}</td>
            <td><a class="show" href={{url('/courses', [$course ->id])}}>Show</a></td>
        </tr>
    @endforeach
</table>
</div>

@if (session('message'))
    <div class="success-message">{{session('message')}}</div>
@endif

</body>
</html>



