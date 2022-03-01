<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

require_once  base_path() . '/vendor/autoload.php';


class FormController extends Controller
{

    public function chooseTemplate()
    {
        return view('welcome');
    }
}
