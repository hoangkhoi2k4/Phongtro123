<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdatePhoneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'phone_new' => 'required',
            'code' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'phone_new.required' => 'Số điện thoại không được để trống',
            'code.required' => 'Chưa nhập mã xác thực',
        ];
    }
}
