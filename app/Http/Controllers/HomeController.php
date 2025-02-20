<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('main'); // Asegúrate de tener resources/views/main.blade.php
    }
}