<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PersonelFormRequest extends FormRequest
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
        //dd(request()->all());
        return [
            //

            'nom'=>['required'],
            'prenom'=>['required'],
            'poste'=>['required'],
            'code'=>['required'],
            'lib'=>['required'],
            'active'=>['required'],
        ];
    }
}
