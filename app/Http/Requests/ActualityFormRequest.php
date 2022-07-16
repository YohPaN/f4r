<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualityFormRequest extends FormRequest
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
            'title'=>'required',
            'text'=>'required',
            //'picture'=> 'required',
            'displayActuality'=>'integer',
        ];
    }

    protected function prepareForValidation()
    {
        if(!isset($this->displayActuality)){
            $this->displayActuality = 0;
        }else{
            $this->displayActuality = 1;
        }
        $this->merge([
            'title'=> strip_tags($this->title),
            'text'=> strip_tags($this->text),
            //'picture'=> strip_tags($this->release_date),
            'displayActuality'=> strip_tags($this->displayActuality),
        ]);
    }
}
