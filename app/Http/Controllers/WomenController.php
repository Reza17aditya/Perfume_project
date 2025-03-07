<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Women;

class WomenController extends Controller
{
    public function index(){
        return view('pages.main.woman',
        [
            'current_page' => 'woman',
            'womens' => Women::all(),
            'javascript_file' => 'js/main/js.js'
        ]);
    }
}
