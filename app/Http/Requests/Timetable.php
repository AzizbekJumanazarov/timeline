<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Timetable extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'search' => [
                'nullable',
                'string'
            ],
            'begin_time' => [
                'nullable',
                'date_format:H:i'
            ],
            'group_id' => [
                'nullable',
                'integer',
                Rule::exists('groups', 'id')
            ],
            'room_id' => [
                'nullable',
                'integer',
                Rule::exists('rooms', 'id')
            ],
            'subject_id' => [
                'nullable',
                'integer',
                Rule::exists('subjects', 'id')
            ],
            'teacher_id' => [
                'nullable',
                'integer',
                Rule::exists('teachers', 'id')
            ]
        ];
    }
}
