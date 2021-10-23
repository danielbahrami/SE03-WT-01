<html>
<body>
<h1>Create course</h1>
<form action="create" method="POST">
    @csrf
    <label for="department_id">Department:</label><br>
    <select name="department_id" id="department_id">
        <option selected="false"></option>
        @foreach($department as $department)
            <option value="{{$department -> id}}">{{$department -> name}}</option>
        @endforeach
    </select>
    <br><br>
    <label for="name">Name:</label>
    <br>
    <input type="text" id="name" name="name" placeholder="Enter name">
    <br><br>
    <label for="code">Code:</label>
    <br>
    <input type="text" id="code" name="code" placeholder="Enter code">
    <br><br>
    <label for="ects">ECTS:</label>
    <br>
    <input type="number" id="ects" name="ects" placeholder="Enter ects">
    <br><br>
    <label for="description">Description:</label>
    <br>
    <input type="text" id="description" name="description" placeholder="Enter description">
    <br><br><br>
    <button class="submit" type="submit">Create course</button>
</form>
</body>
</html>
