<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubTheme;
use App\Problem;

class ProblemsController extends Controller
{
    public function index($theme, $subtheme)
    {
        $problems = SubTheme::firstWhere('url', $subtheme)->problems;
        return view('problems', compact('problems', 'subtheme', 'theme'));
    }
}
