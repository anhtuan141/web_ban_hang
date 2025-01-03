<?php

namespace App\Http\Requests\UserRequests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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

        $userId = $this->route('id'); // Lấy ID từ route

        return [
            'name' => ['required', 'max:20', 'string'],
            'username' => ['required', 'max:20', 'string'],
            'password' => ['required', 'max:50', 'min:6'],
            'phone' => ['required', 'max:12', 'min:9'],
            'status' => ['boolean', 'required']
        ];
    }
}
