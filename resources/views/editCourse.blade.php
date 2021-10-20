<html>
<body>
<h1>Edit course</h1>
<form action="/editCourse" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$course['id']}}">
    <label for="department">Department:</label><br>
    <!--<input type="" id="department" name="department" value="{{$course['department_id']}}">-->
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{$course['name']}}"><br><br>
    <label for="code">Code:</label><br>
    <input type="text" id="code" name="code" value="{{$course['code']}}"><br><br>
    <label for="ects">ECTS:</label><br>
    <input type="number" id="ects" name="ects" value="{{$course['ects']}}"><br><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" value="{{$course['description']}}"><br><br>
    <button class="submit" type="submit">Update course</button>
</form>
</body>
</html>
