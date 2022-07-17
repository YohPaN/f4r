<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LiveFormRequest extends FormRequest
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
            'live_date' => 'required',
            'city' => 'required',
            'place' => 'required',
            'displayLive' => 'integer'
        ];
    }

    protected function prepareForValidation()
    {
        if(!isset($this->displayLive)){
            $this->displayLive = 0;
        }else{
            $this->displayLive = 1;
        }
        $this->merge([
            'live_date' => strip_tags($this->live_date),
            'city' => strip_tags($this->city),
            'place' => strip_tags($this->place),
            'displayLive' => $this->displayLive,
        ]);
    }
}
