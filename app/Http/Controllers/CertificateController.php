<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates    = Certificate::all();
        return view('certificate', compact('certificates'));
    }
}
