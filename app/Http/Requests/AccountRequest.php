<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => [
                'required',
                'min:6',
                // 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            ],
            'repassword' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Trường :attribute bắt buộc phải nhập',
            'min' => 'Bắt buộc phải nhập :min kí tự',
        ];
    }

    public function attributes() {
        return [
            'name' => 'Tên',
            'password' => 'Mật khẩu',
            'repassword' => 'Xác nhận mật khẩu'
        ];
    }
}
