<html>
<body>
<h1>Edit department</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$department['id']}}">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{$department['name']}}"><br><br>
    <label for="code">Code:</label><br>
    <input type="text" id="code" name="code" value="{{$department['code']}}"><br><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" value="{{$department['description']}}"><br><br>
    <button class="submit" type="submit">Update Department</button>
</form>
</body>
</html>
