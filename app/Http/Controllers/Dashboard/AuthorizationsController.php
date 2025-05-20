<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Authorization;
use Illuminate\Http\Request;

class AuthorizationsController extends Controller
{
    public function index()
    {
        $authorizations = Authorization::paginate(10);
        return view('dashboard.authorizations.index', compact('authorizations'));
    }

    public function create()
    {
        return view('dashboard.authorizations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'category'  => 'required|string|max:255',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('authorizations', 'public');
        }

        Authorization::create([
            'name'      => $request->name,
            'category'  => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->route('dashboard.authorizations.index')
            ->with('success', 'Authorization created successfully.');
    }

    public function edit(Authorization $authorization)
    {
        return view('dashboard.authorizations.edit', compact('authorization'));
    }

    public function update(Request $request, Authorization $authorization)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'name'     => $request->name,
            'category' => $request->category,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('authorizations', 'public');
        }

        $authorization->update($data);

        return redirect()->route('dashboard.authorizations.index')
            ->with('success', 'Authorization updated successfully.');
    }

    public function destroy(Authorization $authorization)
    {
        $authorization->delete();

        return redirect()->route('dashboard.authorizations.index')
            ->with('success', 'Authorization deleted successfully.');
    }
}
