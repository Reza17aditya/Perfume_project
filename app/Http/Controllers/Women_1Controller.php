<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Women_1Controller extends Controller
{
    public function index(){
        return view('pages.main.woman_1',
        [
            'current_page' => 'woman_1',
            'womens' => Women::all(),
            'javascript_file' => 'js/main/js.js'
        ]);
    }
}
