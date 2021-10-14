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
<h1>Update department</h1>


<form action="/departments" method="PUT">
    @csrf
    <input type="hidden" name="id" value="{{$department['id']}}">
    <label>Code:</label><br>
    <input type="text" name="code" value="{{$department['code']}}"><br><br>
    <label>Name:</label><br>
    <input type="text" name="name" value="{{$department['name']}}"><br><br>

    <label>Description:</label><br>
    <input type="text" name="description" value="{{$department['description']}}"><br><br>

    <!--
    <input type="text" name="code" value=""><br><br>
    <input type="text" name="name" value=""><br><br>
    <input type="text" name="ects" value=""><br><br>
-->
    <<button type="submit">Update</button>>
</form>
