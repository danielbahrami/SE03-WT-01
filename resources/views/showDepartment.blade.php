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
@foreach($departments as $department)
    <tr>
        <th class="code">{{$department['code']}}</th>
        <th class="name">{{$department['name']}}</th>
        <th class="description">{{$department['description']}}</th>
    </tr>
    @endforeach
</table>


<table class="course">
    <tr>
        <th class="code">Code</th>
        <th class="name">Name</th>
        <th class="ects">ECTS</th>
        <td class="show">Show</td>


    </tr>


</table>

</body>
</html>


