<?php

namespace App\Http\Controllers;
use App\SubTheme;

use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function add(Request $req){
        SubTheme::find($req->input('theme'))->problems()
        ->create([
            'description' => $req->input('description'),
            'solution' => $req->input('solution'),
        ]);
        return redirect(route('themes'));
    }
}
