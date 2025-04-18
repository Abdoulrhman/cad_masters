<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificatesController extends Controller
{
    public function index()
    {
        return view('dashboard.certificates.index');
    }

    public function create()
    {
        return view('dashboard.certificates.create');
    }

    public function store(Request $request)
    {
        // Implementation pending
        return redirect()->route('dashboard.certificates.index');
    }

    public function edit($id)
    {
        return view('dashboard.certificates.edit');
    }

    public function update(Request $request, $id)
    {
        // Implementation pending
        return redirect()->route('dashboard.certificates.index');
    }

    public function destroy($id)
    {
        // Implementation pending
        return redirect()->route('dashboard.certificates.index');
    }
}
