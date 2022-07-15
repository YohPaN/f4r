<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function news() {
        return view('news');
    }
    public function lyrics() {
        return view('lyrics');
    }
    public function shop() {
        return view('shop');
    }
}
