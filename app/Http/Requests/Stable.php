<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Stable extends FormRequest
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
            'name'               => 'required|string|max:255',
            'owner'              => 'required|string|max:255',
            'manager'            => 'required|string|max:255',
            'contact_person'     => 'required|numeric|digits_between:6,15',
            'contact_number'     => 'required|numeric|digits_between:6,15',
            'capacity_of_stable' => 'required|numeric',
            'capacity_of_arena'  => 'required|numeric',
            'number_of_coach'    => 'required|numeric',
            'address'            => 'required|string|max:255',
            'user_id'            => 'required',
        ];
    }
}
