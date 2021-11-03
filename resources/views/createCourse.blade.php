<html>
<body>

<h1>Create course</h1>

<form action="create" method="POST">
    @csrf
    <label for="department_id">Department:</label>
    <br>
    <select class="department" name="department" id="department">
        <option selected="false"></option>
        @foreach($department as $department)
            <option value="{{$department -> id}}">{{$department -> name}}</option>
        @endforeach
    </select>
    <br><br>
    <label for="name">Name:</label>
    <br>
    <input class="name" type="text" id="name" name="name" placeholder="Enter name">
    <br><br>
    <label for="code">Code:</label>
    <br>
    <input class="code" type="text" id="code" name="code" placeholder="Enter code">
    <br><br>
    <label for="ects">ECTS:</label>
    <br>
    <input class="ects" type="number" id="ects" name="ects" placeholder="Enter ects">
    <br><br>
    <label for="description">Description:</label>
    <br>
    <input class="description" type="text" id="description" name="description" placeholder="Enter description">
    <br><br><br>
    <button class="submit" type="submit">Create course</button>
</form>

</body>
</html>
