<?php

namespace App\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Controllers;

class Welcome extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
