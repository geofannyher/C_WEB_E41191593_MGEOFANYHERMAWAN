<?php
namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request,
App\Http\Controllers\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home')
    }
}