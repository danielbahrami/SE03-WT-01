<html>
<body>

<h1>Create Courses</h1>
<form action="create" method="POST">
    @csrf
    <label for="code">Code:</label><br>
    <input type="text" id="code" name="code" placeholder="Enter code"><br><br>

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" placeholder="Enter name"><br><br>

    <label for="ects">ECTS:</label><br>
    <input type="number" id="ects" name="ects" placeholder="Enter ects"><br><br>

    <label for="department">Department:</label><br>
    <select name="department" id="department">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>


    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" placeholder="Enter description"><br><br>


    <button class="submit" type="submit">Create course</button>
</form>

</body>
</html>
