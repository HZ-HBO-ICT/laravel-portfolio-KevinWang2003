<?php

namespace App\Http\Controllers;

class DashboardController
{
    /**
     * shows dashboard
     */
    public function index()
    {
        return view('dashboard');
    }
}
