<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


require_once  base_path() . '/vendor/autoload.php';


class FormController extends Controller
{

    public function formHandler()
    {
        return "<h1>formHandler method</h1>";
    }

    public function displayForm(Request $request)
    {
        $form_id = $request->input('template');
        return view("form_{$form_id}");
    }
}
