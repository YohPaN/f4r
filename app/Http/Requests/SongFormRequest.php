<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongFormRequest extends FormRequest
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
            'lyrics'=>'required',
            //'year_made'=> ['required', 'integer'],
            'traduction' =>'required',
            //'displaySong'=>'required',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'title'=> strip_tags($this->title),
            'lyrics'=> strip_tags($this->lyrics),
            //'year_made'=> strip_tags($this->year_made),
            'traduction'=> strip_tags($this->traduction),
            //'displaySong'=> strip_tags($this->displaySong),
        ]);
    }
}
