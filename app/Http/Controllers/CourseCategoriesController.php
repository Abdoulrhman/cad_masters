<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courseCategories = CourseCategory::latest()->paginate(5);
        return view('admin/Categories/index', compact('courseCategories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'description' => 'nullable|string',
        ]);

        // Create a new category
        $courseCategories = CourseCategory::create($validatedData);
        // Redirect with a success message
        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');



       /* $request->validate([
            'name' => 'required',
        ]);

        $courseCategories = new CourseCategory();
        $courseCategories->name = $request->name;
        $courseCategories->save();
        return redirect()->route("admin.categories.index")->with('status', 'Record has been added successfully !');*/
    }


    /* $request->validate([
         'name'               =>  'required',

     ]);

     $form_data = array(

         'name'                  => request('name'),

     );

     CourseCategory::create($form_data);

     return redirect('admin.categories.index')->with('success', 'Data Added successfully.');}*/



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courseCategories = CourseCategory::findOrFail($id);
        return view('admin.categories.edit',compact('courseCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name'           =>  'required',
            'description'    =>  'required'
        ]);


        $form_data = array(
            'name'           =>   request('name'),
            'description'    =>   request('description')
        );

        CourseCategory::whereId($id)->update($form_data);

        //return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
        return redirect('admin.categories.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courseCategories = CourseCategory::findOrFail($id);
        $courseCategories->delete();

        return redirect('admin/categories/index')->with('success', 'Data is successfully deleted');
    }
}
