<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Man_2Controller extends Controller
{
    public function home()
    {
        return view('pages.main.man_2', [
            'current_page' => 'man',
            'mans' => Man::all(),
            'javascript_file' => 'js/main/js.js'
        ]);
    }
}
