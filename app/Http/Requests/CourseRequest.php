<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'          => ['required', 'string', 'max:255'],
            'description'   => ['nullable', 'string'],
            'category_id'   => ['required', 'exists:course_categories,id'],
            'price'         => ['required', 'numeric'],
            'price_offer'   => ['nullable', 'numeric'],
            'schedule_time' => ['nullable', 'date_format:H:i'],
            'hours'         => ['nullable', 'integer'],
            'branch'        => ['nullable', 'string', 'max:255'],
            'image'         => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'], // Ensure correct validation
        ];
    }
}
