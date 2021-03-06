<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PageRequest extends \Dsadmin\CRUD\Http\Requests\CrudRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|max:255',
            'content' => 'required|min:4',
            'slug' => 'unique:pages,slug,'.\Request::get('id')
        ];
    }

}