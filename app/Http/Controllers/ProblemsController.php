<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class ProblemsController extends Controller
{
    public function index($subtheme)
    {
        define('subtheme', $subtheme);
        $subthemes = Theme::firstWhere('url', $theme)->subthemes;
        define('subthemes', $subthemes);
        return view('problems', compact('subtheme'), compact('subthemes'));
    }
}
