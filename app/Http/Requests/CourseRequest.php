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
            'category_id'   => 'nullable|exists:course_categories,id',
            'price'         => 'required|numeric|min:0',
            'price_offer'   => 'nullable|numeric|min:0',
            'branch'        => 'nullable|string|max:255',
            'hours'         => 'required|integer|min:1',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date|after:start_date',
            'max_students'  => 'required|integer|min:1',
            'instructor_id' => 'nullable|exists:users,id',
            'is_active'     => 'required|boolean',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description'   => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'The course name field is required.',
            'hours.required'        => 'The hours field is required.',
            'end_date.after'        => 'The end date field must be a date after start date.',
            'price.required'        => 'The price field is required.',
            'max_students.required' => 'The maximum students field is required.',
            'description.required'  => 'The description field is required.',
            'image.image'           => 'The file must be an image.',
            'image.mimes'           => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max'             => 'The image must not be greater than 2MB.',
        ];
    }
}
