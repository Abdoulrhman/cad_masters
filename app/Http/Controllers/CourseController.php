<?php

namespace App\Http\Controllers;

use App\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $course = course::latest()->paginate(5);
        return view('courses/index', compact('course'))->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              =>  'required',
            'description'       =>  'required',
            'category_id'       =>  'required',
            'start_date'        =>  'required',
            'end_date'          =>  'required',
            'hours'             =>  'required',
            'schedule_time'     =>  'required',
            'branch'            =>  'required',
            'price'             =>  'required',
            'price_offer'       =>  'required',
            'image'             =>  'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(

            'name'                  => request('name'),
            'description'           => request('description'),
            'start_date'            => request('start_date'),
            'end_date'              => request('end_date'),
            'hours'                 => request('hours'),
            'schedule_time'         => request('schedule_time'),
            'branch'                => request('branch'),
            'category_id'           => request('category_id'),
            'price'                 => request('price'),
            'price_offer'           => request('price_offer'),
            'image'                 => $new_name
        );

        course::create($form_data);

        return redirect('courses')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = course::findOrFail($id);
        return view('courses.edit',compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'name'              =>  'required',
                'description'       =>  'required',
                'category_id'       =>  'required',
                'start_date'        =>  'required',
                'end_date'          =>  'required',
                'hours'             =>  'required',
                'schedule_time'     =>  'required',
                'branch'            =>  'required',
                'price'             =>  'required',
                'price_offer'       =>  'required',
                'image'             =>  'required'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([

                'image'           =>  'image|max:2048'

            ]);
        }

        $form_data = array(
            'name'                  => request('name'),
            'description'           => request('description'),
            'start_date'            => request('start_date'),
            'end_date'              => request('end_date'),
            'hours'                 => request('hours'),
            'schedule_time'         => request('schedule_time'),
            'branch'                => request('branch'),
            'category_id'           => request('category_id'),
            'price'                 => request('price'),
            'price_offer'           => request('price_offer'),
            'image'                 =>   $image_name
        );

        course::whereId($id)->update($form_data);

        return redirect('courses')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = course::findOrFail($id);
        $courses->delete();

        return redirect('courses')->with('success', 'Data is successfully deleted');
    }
}
