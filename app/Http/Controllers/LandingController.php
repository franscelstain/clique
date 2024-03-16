<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.content');
    }
}