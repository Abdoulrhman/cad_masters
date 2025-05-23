<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'price'         => 'required|numeric|min:0',
            'max_students'  => 'required|integer|min:1',
            'is_active'     => 'boolean',
            // Optional fields
            'image'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id'   => 'required|exists:course_categories,id',
            'price_offer'   => 'nullable|numeric|min:0',
            'hours'         => 'nullable|integer|min:1',
            'instructor_id' => 'nullable|exists:instructors,id',
            'branch_id'     => 'required|exists:branches,id',
            'outline_link'  => 'nullable|string|max:255',
            'youtube_link'  => 'nullable|string|max:255',
            'daysInWeek'    => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'The course name field is required.',
            'description.required'  => 'The description field is required.',
            'price.required'        => 'The price field is required.',
            'max_students.required' => 'The maximum students field is required.',
            'category_id.required'  => 'The category field is required.',
            'image.image'           => 'The file must be an image.',
            'image.mimes'           => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max'             => 'The image must not be greater than 2MB.',
        ];
    }
}
