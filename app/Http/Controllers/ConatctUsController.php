<?php

namespace App\Http\Controllers;

use App\Models\ContactSettings;
class ConatctUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }
}
