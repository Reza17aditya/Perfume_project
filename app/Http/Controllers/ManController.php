<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ManController extends Controller
{
    public function home()
    {
        return view('pages.main.man', [
            'current_page' => 'man',
            'mans' => Man::all(),
            'javascript_file' => 'js/main/js.js'
        ]);
    }
}
