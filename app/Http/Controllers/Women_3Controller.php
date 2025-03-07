<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Women_3Controller extends Controller
{
    public function index(){
        return view('pages.main.woman_3',
        [
            'current_page' => 'woman_3',
            'womens' => Women::all(),
            'javascript_file' => 'js/main/js.js'
        ]);
    }
}
