<?php

namespace App\Http\Controllers;

class DepartmentController extends Controller
{
    public function listDepartment()
    {
        return 'List department';
    }

    public function createDepartmentForm()
    {
        return <<<HTML
<html>
<body>
<h1>Create department</h1>
<form method="post">
<label for="name">Name:</label><br>
<input type="text" id="name" name="name"><br>
<label for="code">Code:</label><br>
<input type="text" id="code" name="code"><br>
<label for="description">Description:</label><br>
<textarea id="description" cols="50" rows="10"></textarea><br>
<input name="Submit" type="submit" value="Create department">
</form>
</body>
</html>
HTML;

    }

    public function createDepartment()
    {
        return 'create department';
    }

    public function showDepartment()
    {
        return 'show department';
    }

    public function editDepartment()
    {
        return 'update department';
    }

    public function updateDepartment()
    {
        return 'Update department';
    }

    public function deleteDepartment()
    {
        return 'delete department';
    }
}
