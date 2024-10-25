<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome'); // pastikan ada file welcome.blade.php di resources/views
    }
}
