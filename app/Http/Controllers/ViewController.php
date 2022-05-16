<?php

namespace App\Http\Controllers;

class ViewController
{
    /**
     * shows homepage
     */
    public function index()
    {
        return view('welcome');
    }
}
