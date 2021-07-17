<?php

namespace Modules\AdminJobs\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class AdminJobsRequest
 * @package Modules\AdminJobs\Http\Requests
 */
class AdminJobsRequest extends Request
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
            'job_title' => 'required' ,'job_description' => 'required' ,'skills' => 'required' ,'job_duration' => 'required' ,'budget' => 'required' ,'attachment' => 'required' ,
        ];
    }

}