<?php
<<<<<<< HEAD
namespace App\Http\Controllers;

use App\Models\Certificate;
=======

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
>>>>>>> asem-branch

class CertificateController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $certificates = Certificate::all();
        return view('certificate', compact('certificates'));
=======
        $certificates    = Certificate::all();
        return view('courses.show', compact('certificates'));
>>>>>>> asem-branch
    }
}
