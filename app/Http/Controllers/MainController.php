<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function welcome()
    {
        return <<<HTML
<html>
<h1>Welcome to itsLearning!!!</h1>
</html>
HTML;
    }
}
