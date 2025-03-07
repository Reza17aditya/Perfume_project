<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;


class PageController extends Controller
{
    public function home()
    {
        return view('pages.main.home',
        [
            'current_page' => 'home',
            'products' => Product::all(),
            'javascript_file' => 'js.main/js.js',
        ]);
    }
}
