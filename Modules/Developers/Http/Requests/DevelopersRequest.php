<?php

namespace Modules\Developers\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class DevelopersRequest
 * @package Modules\Developers\Http\Requests
 */
class DevelopersRequest extends Request
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
            'first_name' => 'required' ,'last_name' => 'required' ,'phone_number' => 'required' ,'email' => 'required' ,'rate' => 'required' ,'about' => 'required' ,'profile_picture' => 'required' ,'portfolio_links' => 'required' ,'portfolio_images' => 'required' ,'skills' => 'required' ,
        ];
    }

}