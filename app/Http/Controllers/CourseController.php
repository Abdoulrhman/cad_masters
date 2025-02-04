<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::latest()->paginate(5);
        return view('admin/courses/index', compact(''))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'            =>  'required',
        ]);

        $course = new Course();
        $course->name =$request->name;
        /*$form_data = array(
            $courses->name  = request('name'),
        );*/
        Course::create($course);

        return redirect('admin.courses.index')->with('success', 'Data Added successfully.');


       /* $request->validate
        ([
            'name'           =>  'required|string|max:255',
            'description'    =>  'required|nullable|string',
            //'image'          =>  'required|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hours'          =>  'required|nullable|string',
            'schedule_time'  =>  'required|nullable|date_format:H:i',
            'branch'         =>  'required|nullable|string|max:255',
            'price'          =>  'nullable|numeric|min:0',
            'price_offer'    =>  'nullable|numeric|min:0',
            'category_id'    =>  'required|exists:categories,id'
        ]);


    /*    $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);*/
        /*$form_data = array(

            'name'              =>  request('name'),
            'description'       =>  request('description'),
            'hours'             =>  request('hours'),
            'schedule_time'     =>  request('schedule_time'),
            'branch'            =>  request('branch'),
            'price'             =>  request('price'),
            'price_offer'       =>  request('price_offer'),
            'category_id'       =>  request('category_id'),
            //'image'             =>  $new_name
        );

     /*   if ($request->has('category_id')) {
            Course->categoriesCourse()->attach($request->input('category_id'));
        }*/

//        cousre::create($form_data);
//
//        return redirect('admin.courses.index')->with('success', 'Data Added successfully.');
    }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
