<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediasController extends Controller
{
    public function index()
    {
        return view('dashboard.medias.index');
    }

    public function create()
    {
        return view('dashboard.medias.create');
    }

    public function store(Request $request)
    {
        // Implementation pending
        return redirect()->route('dashboard.medias.index');
    }

    public function edit($id)
    {
        return view('dashboard.medias.edit');
    }

    public function update(Request $request, $id)
    {
        // Implementation pending
        return redirect()->route('dashboard.medias.index');
    }

    public function destroy($id)
    {
        // Implementation pending
        return redirect()->route('dashboard.medias.index');
    }
}
