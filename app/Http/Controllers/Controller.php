<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function page()
    {
        return view('welcome');
    }
}
