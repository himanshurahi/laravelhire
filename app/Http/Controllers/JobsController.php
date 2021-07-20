<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request as RequestsRequest;
use Illuminate\Http\Request;
use \FileUploader;
use Modules\AdminJobs\Entities\AdminJob;


class JobsController extends Controller
{
    //

    public function index()
    {
        // $job =  AdminJob::first();
        // return $job->attachments()->get();

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


        // return public_path('assets/img/favicon.png');
        $jobs->save();
        // $attachment = $jobs->attach(public_path('assets/img/favicon.png'));
        // return view("jobs.post_job");
        return response()->json(['success' => $jobs]);
    }
    public function uploadfile(Request $request)
    {
        $image = $request->file('file');

        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('files'), $avatarName);


        return response()->json(['success' => $avatarName]);
    }



    // Bnb\Laravel\Attachments\HasAttachment;
    public function AddFiles(Request $request)
    {


        $jobs = AdminJob::where('id', '=', $request->input('job_id'))->first();
        // return $jobs;
        // $attachment = $jobs->attach(public_path('assets/img/favicon.png'));
        foreach ($request->input("filenames") as $value) {
            $jobs->attach(public_path('files/' . $value));
        }
        return response()->json(['success' => 'Done']);
    }

    public function removeFile(Request $request)
    {
        unlink(public_path('files/' . $request->input("file_name")));
        return response()->json(['success' => 'File Deleted']);
    }

    public function listJobs()
    {
        $jobs = AdminJob::all();
        return view("jobs.list_jobs", compact('jobs'));
    }

    public function AddSocialLinks(Request $request)
    {
        $job = AdminJob::where('id', '=', $request->input("job_id"))->first();
        $job->social_links = $request->input("social_links");
        $job->save();
        return response()->json(['success' => 'Social Links Added']);


    }
}
