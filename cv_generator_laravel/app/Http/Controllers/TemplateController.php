<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

require_once  base_path() . '/vendor/autoload.php';


class TemplateController extends Controller
{
    public function test()
    {
        return view('welcome');
    }

}
