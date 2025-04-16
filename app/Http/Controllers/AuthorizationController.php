<?php

namespace App\Http\Controllers;

use App\Models\Authorization;
use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function index()
    {
        $authorizations    = Authorization::all();
        return view('authorization', compact('authorizations'));
    }
}
