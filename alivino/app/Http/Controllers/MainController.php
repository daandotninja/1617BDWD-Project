<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function overview()
    {
        

        return view('main.overview', [
            
        ]);
    }
    public function shops()
    {
        

        return view('main.shops', [
            
        ]);
    }
    public function about()
    {
        

        return view('main.about', [
            
        ]);
    }
    public function contact()
    {
        

        return view('main.contact', [
            
        ]);
    }
    public function product()
    {
        

        return view('main.product', [
            
        ]);
    }
}
