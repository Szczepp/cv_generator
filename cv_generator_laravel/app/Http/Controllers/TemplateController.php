<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

require_once  base_path() . '/vendor/autoload.php';
g

class TemplateController extends Controller
{
    public function formHandler($id)
    {
        return view('form_' . $id);
    }

}
