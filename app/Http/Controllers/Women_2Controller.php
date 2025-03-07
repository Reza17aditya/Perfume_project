<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Women_2Controller extends Controller
{
    public function index(){
        return view('pages.main.woman_2',
        [
            'current_page' => 'woman_2',
            'womens' => Women::all(),
            'javascript_file' => 'js/main/js.js'
        ]);
    }
}
