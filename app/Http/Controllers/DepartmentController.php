<?php

namespace App\Http\Controllers;

class DepartmentController extends Controller
{
    public function listDepartment()
    {
        return <<<HTML
<html>
<head>
<style>
.department {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}
.code{
border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.name {
border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.courses {
border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.show {
border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.success{

}
</style>
</head>
<body>

<h2>List over departments</h2>

<table class="department">
  <tr>
    <th class="code">Code</th>
    <th class="name">Name</th>
    <th class="courses">Courses</th>
    <th class="show">Show</th>
  </tr>
  <tr>
    <td class="code">456</td>
    <td class="name">IT Department</td>
    <td class="courses">3 courses</td>
    <td class="show"><a href=http://127.0.0.1:8000/departments/{department}>Show</a></td>
  </tr>
</table>
<div>
<h2>Create department</h2>
<p> To create a new department please press <a href=http://127.0.0.1:8000/departments/create>her</a> </p>

</div>
</body>

HTML;

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
