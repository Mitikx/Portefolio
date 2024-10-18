<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'MySQL', 'Git', 'C++'];

        return view('portfolio', compact('skills'));
    }
}
