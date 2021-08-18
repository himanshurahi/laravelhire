<?php

namespace Modules\AdminCompanies\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class AdminCompaniesRequest
 * @package Modules\AdminCompanies\Http\Requests
 */
class AdminCompaniesRequest extends Request
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
            'company_name' => 'required' ,'company_email' => 'required' ,'company_details' => 'required' ,
        ];
    }

}