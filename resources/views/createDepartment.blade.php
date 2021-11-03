<html>
<body>

<h1>Create department</h1>

<form action="create" method="POST">
    @csrf
    <label for="name">Name:</label>
    <br>
    <input type="text" id="name" name="name" placeholder="Enter name">
    <br><br>
    <label for="code">Code:</label>
    <br>
    <input type="text" id="code" name="code" placeholder="Enter code">
    <br><br>
    <label for="description">Description:</label>
    <br>
    <input type="text" id="description" name="description" placeholder="Enter description">
    <br><br><br>
    <button class="submit" type="submit">Create department</button>
</form>

</body>
</html>
