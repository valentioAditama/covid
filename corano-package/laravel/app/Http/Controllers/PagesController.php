<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function Tips(){
        return view('tips');
    }

    public function Crud(){
        return view('Crud');
    }

    public function DataTerkini(){
        return view('DataTerkini');
    }
    
}
