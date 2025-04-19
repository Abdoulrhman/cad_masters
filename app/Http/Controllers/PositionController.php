<?php
namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::latest()->get();
        return view('dashboard.positions.index', compact('positions'));
    }

    public function create()
    {
        return view('dashboard.positions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'department'     => 'required|string|max:255',
            'type'           => 'required|string|max:255',
            'description'    => 'required|string',
            'requirements'   => 'required|array',
            'requirements.*' => 'required|string',
            'is_active'      => 'nullable|boolean', // Allow it to be missing
        ]);

        $validated['is_active'] = $request->boolean('is_active'); // Proper boolean casting

        Position::create($validated);

        return redirect()->route('dashboard.positions.index')
            ->with('success', 'Position created successfully.');
    }

    public function edit(Position $position)
    {
        return view('dashboard.positions.edit', compact('position'));
    }

    public function update(Request $request, Position $position)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'department'     => 'required|string|max:255',
            'type'           => 'required|string|max:255',
            'description'    => 'required|string',
            'requirements'   => 'required|array',
            'requirements.*' => 'required|string',
            'is_active'      => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        $position->update($validated);

        return redirect()->route('dashboard.positions.index')
            ->with('success', 'Position updated successfully.');
    }

    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('dashboard.positions.index')
            ->with('success', 'Position deleted successfully.');
    }
}
