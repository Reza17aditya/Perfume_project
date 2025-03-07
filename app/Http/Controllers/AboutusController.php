<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutus;

class AboutusController extends Controller
{
    public function index()
    {
        return view('pages.main.aboutus', [
            'current_page' => 'About',
            'abouts' => Aboutus::all(),
            'javascript_file' => ''
        ]);
    }
}
