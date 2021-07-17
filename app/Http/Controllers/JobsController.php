<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \FileUploader;
use Modules\AdminJobs\Entities\AdminJob;

class JobsController extends Controller
{
    //

    public function index()
    {
        return view("jobs.post_job");
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validated = $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'skills' => 'required',
            'job_duration' => 'required',
            'budget' => 'required',
        ]);

        $jobs = new AdminJob();
        $jobs->job_title = $request->job_title;
        $jobs->job_description = $request->job_description;
        $jobs->skills = $request->skills;
        $jobs->job_duration = $request->job_duration;
        $jobs->budget = $request->budget;
        $jobs->save();
        return view("jobs.post_job");
    }
    public function uploadfile(Request $request)
    {
        // return $req->file('dragndrop');

        // initialize FileUploader
        $FileUploader = new FileUploader('dragndrop', array(
            // options
            'limit' => 4,
            'uploadDir' => storage_path('app/public/'),
            'title' => 'auto'
        ));

        // upload
        $upload = $FileUploader->upload();
        return $upload;
    }

    public function removeFile(Request $request)
    {
        unlink(storage_path('app/public/'.$_POST['file']));
        exit;
    }
}
