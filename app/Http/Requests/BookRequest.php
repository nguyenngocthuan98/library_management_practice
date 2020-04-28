<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name_book' => 'required|max:255',
            'page_number' => 'required|regex:/[0-9]/',
            'image' => 'string',
            'description'  => 'string',
            'id_publisher' => 'required|max:255',
            'id_category' => 'required|max:255',
            'id_author' => 'required|max:255',
        ];
    }
}
