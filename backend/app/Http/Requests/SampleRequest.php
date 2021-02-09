<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//学習で追記
use App\Rules\SampleRule;

class SampleRequest extends FormRequest
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
            //学習で追記
            'sample_input'               => [new SampleRule('sample'), 'required'],
            'single_array.sample_input'  => [new SampleRule('sample'), 'required'],
            'multi_array.*.sample_input' => [new SampleRule('sample'), 'required'],
        ];
    }
}
