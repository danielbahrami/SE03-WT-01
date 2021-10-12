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

    .courses {
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
<h1>List of departments</h1>

@if(session('message'))
    <div class="success-message">{{session('message')}}</div>
@endif


<table class="department">
    <tr>
        <th class="code">Code</th>
        <th class="name">Name</th>
        <th class="courses">Courses</th>
        <th class="show">Show</th>
    </tr>
    @foreach($departments as $department)
        <tr>
            <td class="code">{{$department['code']}}</td>
            <td class="code">{{$department['name']}}</td>
            <td class="courses">0</td>
            <td class="show"><a href=/departments/{department}>Show</a></td>
        </tr>
    @endforeach

</table>

<a class="new" href=/departments/create><h2>Create new department</h2></a>
</div>
</body>
