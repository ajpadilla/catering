<?php

namespace App\Http\Requests\API\Kitchen\Recipe;

use App\Http\Requests\API\MyAPIRequest;
use App\Models\Kitchen\Recipe\Recipe;

class CreateRecipeAPIRequest extends MyAPIRequest
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
        return Recipe::$rules;
    }
}
