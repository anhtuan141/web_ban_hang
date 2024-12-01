<?php

namespace App\Http\Requests\UserRequests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
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
            'name' => ['required', 'max:20', 'string'],
            'username' => ['required', 'max:20', 'string'],
            'email' => ['required', 'max:50', 'email', Rule::unique(User::class, 'email')],
            'password' => ['required', 'max:50', 'min:6'],
            // 'phone' => ['max:11', 'min:10'],
            'status' => ['boolean', 'required']
        ];
    }
}
