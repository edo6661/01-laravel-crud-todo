<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class HomeController extends Controller
{
    function index() {
        $todos = Todo::all();
        return view('home', ['todos' => $todos]);
    }
    
}
