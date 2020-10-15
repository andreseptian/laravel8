<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return "Ini Dari Controller dengan methode index";
    }

    public function edit()
    {
        return "Ini Dari Controller dengan methode edit";
    }
}
