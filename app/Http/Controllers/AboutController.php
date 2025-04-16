<?php
namespace App\Http\Controllers;

use App\Models\CompanyProfile;

class AboutController extends Controller
{
    public function index()
    {
        $companyProfile = CompanyProfile::latest()->first();
        return view('about.index', compact('companyProfile'));
    }
}
