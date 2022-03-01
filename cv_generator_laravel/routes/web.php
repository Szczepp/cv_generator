<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TemplateController;


Route::get('/', [FormController::class, 'chooseTemplate']);

