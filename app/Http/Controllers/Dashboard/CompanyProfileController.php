<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $companyProfile = CompanyProfile::latest()->first();
        return view('dashboard.company-profile.index', compact('companyProfile'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'file'        => 'required|mimes:pdf,doc,docx|max:10240',
        ]);

        if ($request->hasFile('file')) {
            // Delete old file if exists
            $oldProfile = CompanyProfile::latest()->first();
            if ($oldProfile && Storage::disk('public')->exists($oldProfile->file_path)) {
                Storage::disk('public')->delete($oldProfile->file_path);
            }

            $file     = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->store('company-profiles', 'public');

            CompanyProfile::create([
                'title'       => $request->title,
                'description' => $request->description,
                'file_path'   => $filePath,
                'file_name'   => $fileName,
            ]);
        }

        return redirect()->back()->with('success', 'Company profile updated successfully.');
    }

    public function update(Request $request, CompanyProfile $companyProfile)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'file'        => 'nullable|mimes:pdf,doc,docx|max:10240',
        ]);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('file')) {
            // Delete old file if exists
            if ($companyProfile->file_path && Storage::disk('public')->exists($companyProfile->file_path)) {
                Storage::disk('public')->delete($companyProfile->file_path);
            }

            $file     = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->store('company-profiles', 'public');

            $data['file_path'] = $filePath;
            $data['file_name'] = $fileName;
        }

        $companyProfile->update($data);

        return redirect()->back()->with('success', 'Company profile updated successfully.');
    }
}
