<?php

namespace Modules\Companies\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class CompaniesRequest
 * @package Modules\Companies\Http\Requests
 */
class CompaniesRequest extends Request
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

    public function rules()
    {
        return [
            'name' => 'required' ,
        ];
    }

}