<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Man_1Controller extends Controller
{
    public function home()
    {
        return view('pages.main.man_1', [
            'current_page' => 'man',
            'mans' => Man::all(),
            'javascript_file' => 'js/main/js.js'
        ]);
    }
}
