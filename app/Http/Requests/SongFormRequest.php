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
            'release_date'=> 'required',
            'traduction' =>'required',
            'displaySong'=>'integer',
        ];
    }

    public function modifyDisplaySon(){

        
    }
    protected function prepareForValidation()
    {
        if(!isset($this->displaySong)){
            $this->displaySong = 0;
        }else{
            $this->displaySong = 1;
        }
        $this->merge([
            'title'=> strip_tags($this->title),
            'lyrics'=> strip_tags($this->lyrics),
            'release_date'=> strip_tags($this->release_date),
            'traduction'=> strip_tags($this->traduction),
            'displaySong'=> strip_tags($this->displaySong),
        ]);
    }
}
