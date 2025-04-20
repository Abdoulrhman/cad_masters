<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificatesController extends Controller
{
    public function index()
    {
        $certificates = Certificate::paginate(10);
        return view('dashboard.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('dashboard.certificates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('certificates', 'public');
        }

        Certificate::create([
            'name'  => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('dashboard.certificates.index')
            ->with('success', 'Certificate created successfully.');
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
