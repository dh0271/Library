<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookAddRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->hasRole('administrator');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'subject_id' => 'required',
            'isbn' => 'required',
            'publisher' => 'required'
        ];
    }
}
