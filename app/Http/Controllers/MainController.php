<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function welcome()
    {
        return <<<HTML
<html>
<body><h1>Welcome to itsLearning</h1>
<br>
<h2>
 <a href="/departments">Departments</a>
 <br>
 <a href="/courses">Courses</a>
</h2>
</body>
</html>
HTML;
    }
}
