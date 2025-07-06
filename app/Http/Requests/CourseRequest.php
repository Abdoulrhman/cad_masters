<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'                  => ['required', 'string', 'max:255'],
            'description'           => ['required', 'string'],
            'price'                 => ['required', 'numeric', 'min:0'],
            'price_offer'           => ['nullable', 'numeric', 'min:0', 'lt:price'],
            'hours'                 => ['required', 'integer', 'min:1'],
            'max_students'          => ['required', 'integer', 'min:1'],
            'image'                 => ['nullable', 'image', 'max:2048'],
            'categories'            => ['required', 'array', 'min:1'],
            'categories.*'          => ['required', 'exists:course_categories,id'],
            'instructors'           => ['nullable', 'array'],
            'instructors.*'         => ['nullable', 'exists:instructors,id'],
            'branch_id'             => ['nullable', 'exists:branches,id'],
            'duration'              => ['nullable', 'string', 'max:255'],
            'outline_link'          => ['nullable', 'url', 'max:255'],
            'youtube_link'          => ['nullable', 'url', 'max:255'],
            'daysInWeek'            => ['required', 'string', 'max:255'],
            'sessions'              => ['nullable', 'array'],
            'sessions.*.start_date' => ['required_with:sessions.*.end_date', 'date'],
            'sessions.*.end_date'   => ['required_with:sessions.*.start_date', 'date', 'after:sessions.*.start_date'],
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
