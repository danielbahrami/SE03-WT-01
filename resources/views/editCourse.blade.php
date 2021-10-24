<html>
<body>
<h1>Edit course</h1>
<form action="/editCourse" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$course['id']}}">
    <label for="department_id">Department:</label>
    <br>
    <select name="department" id="department">
        @foreach($department as $department)
            <option {{ $department-> id== $course->department->id ? 'selected' : '' }} value="{{$department -> id}}">{{$department -> name}}</option>
        @endforeach
    </select>
    <br><br>
    <label for="name">Name:</label>
    <br>
    <input type="text" id="name" name="name" value="{{$course['name']}}">
    <br><br>
    <label for="code">Code:</label>
    <br>
    <input type="text" id="code" name="code" value="{{$course['code']}}">
    <br><br>
    <label for="ects">ECTS:</label>
    <br>
    <input type="number" id="ects" name="ects" value="{{$course['ects']}}">
    <br><br>
    <label for="description">Description:</label>
    <br>
    <input type="text" id="description" name="description" value="{{$course['description']}}">
    <br><br><br>
    <button class="submit" type="submit">Update course</button>
</form>
</body>
</html>
