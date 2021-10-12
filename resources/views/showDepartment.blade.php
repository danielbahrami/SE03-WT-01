<html>
<style>
    .show {
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

    .success-message {
        font-family: arial, sans-serif;
    }

</style>
<body>
<h1>Show department</h1>

@if(session('message'))
    <div class="success-message">{{session('message')}}</div>
@endif


<table class="show">
    <tr>
        <th class="code">Code</th>
        <th class="name">Name</th>
        <th class="description">Description</th>
    </tr>
    @foreach($departments as $department)
        <tr>
            <td class="code">{{$department['code']}}</td>
            <td class="name">{{$department['name']}}</td>
            <td class="description">{{$department['description']}}</td>
        </tr>
@endforeach
</table>

<h1>Show courses</h1>

<table class="courses">
    <tr>
        <th class="code">Code</th>
        <th class="name">Name</th>
        <th class="ects">ECTS</th>
    </tr>
    @foreach($departments as $department)
        <tr>
            <td class="code">{{$department['code']}}</td>
            <td class="name">{{$department['name']}}</td>
            <td class="ects">{{$department['ects']}}</td>
            <td class="show"><a href={{url('/course', [$course ->id])}}>Show</a>
        </tr>
    @endforeach
</table>

