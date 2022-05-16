<?php

namespace App\Http\Controllers;

class PortfolioController
{
    /**
     * shows portfolio
     */
    public function index()
    {
        abort(500);
        return view('portfolio');
    }
}
