<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Client;
use App\Models\Course;
use App\Models\Partner;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $sliders    = Carousel::all();
        $courses    = Course::all();
        $partners   = Partner::all();
        $clients    = Client::all();
        return view('welcome', compact('sliders', 'partners', 'clients', 'courses'));
    }
}
