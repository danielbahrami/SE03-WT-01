<html>
<style>
    .department {
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

    .description {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .course {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 70%;
    }

    .ects {
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
<h1>Show department</h1>

<table class="department">
    <tr>
        <th class="code">Code</th>
        <th class="name">Name</th>
        <th class="description">Description</th>
    </tr>
        <tr>
            <td class="code">{{$department -> code}}</td>
            <td class="name">{{$department -> name}}</td>
            <td class="description">{{$department -> description}}</td>
        </tr>

</table>
<a class="edit" href="{{$department['id']."/edit"}}">Edit department</a><br>
<a class="remove" href="{{$department['id']."/delete"}}">Delete department</a>

<div>
    <h1>Show connected courses</h1>

    <table class="course">
        <tr>
            <th class="code">Code</th>
            <th class="name">Name</th>
            <th class="ects">ECTS</th>
            <td class="show">Show</td>
        </tr>
        @foreach($department-> courses as $course)
        <tr>

            <td class="code">{{$course -> code}}</td>
            <td class="name">{{$course -> name}}</td>
            <td class="ects">{{$course -> ects}}</td>
            <td class="show"><a href={{url('/courses', [$course ->id])}}>Show</a></td>
        </tr>
    @endforeach
</table>
</div>

@if (session('message'))
    <div class="success-message">{{session('message')}}</div>
@endif

</body>
</html>



