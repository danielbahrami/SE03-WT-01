<html>
<style>
    .department {
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

    .success {
    }

</style>
<body>
<h1>List of departments</h1>
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
        <td class="show"><a href=/departments/{department}>Show</a></td>
    </tr>
</table>

<a href=/departments/create><h2>Create new department</h2></a>
</div>
</body>
