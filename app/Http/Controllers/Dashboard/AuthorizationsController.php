<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorizationsController extends Controller
{
    public function index()
    {
        return view('dashboard.authorizations.index');
    }

    public function create()
    {
        return view('dashboard.authorizations.create');
    }

    public function store(Request $request)
    {
        // Implementation pending
        return redirect()->route('dashboard.authorizations.index');
    }

    public function edit($id)
    {
        return view('dashboard.authorizations.edit');
    }

    public function update(Request $request, $id)
    {
        // Implementation pending
        return redirect()->route('dashboard.authorizations.index');
    }

    public function destroy($id)
    {
        // Implementation pending
        return redirect()->route('dashboard.authorizations.index');
    }
}
