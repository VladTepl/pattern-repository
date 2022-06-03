<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rules\Password;

class ContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:60',
			'password'=>['required',Password::min(8)]
        ];
    }
	public function messages(){
		return [
			'name.required'=>'поле "имя" должно быть заполненно',
			'password.required'=>'поле "пароль" должно быть заполненно'
			];
	}	
			
}
