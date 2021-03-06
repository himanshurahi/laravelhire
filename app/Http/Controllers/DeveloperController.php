<?php

namespace App\Http\Controllers;

use Bnb\Laravel\Attachments\Attachment;
use Illuminate\Http\Request;
use Modules\Developers\Entities\Developer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class DeveloperController extends Controller
{
    public function index()
    {
        return view('developers.register-developer');
    }

    public function store(Request $request)
    {
        // return $request;
        $type =  $request->input('type');
        if ($type == 'save_dev') {
            $validated = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email',
                'rate' => 'required',
                'about' => 'required',
                'skills' => 'required',
                'profile_picture' => 'required',
            ]);

            if ($request->input('dev_id') == null) {
                $devs = new Developer();
                $devs->first_name = $request->first_name;
                $devs->last_name = $request->last_name;
                $devs->phone_number = $request->phone_number;
                $devs->email = $request->email;
                $devs->rate = $request->rate;
                $devs->about = $request->about;
                $devs->skills = $request->skills;
                $devs->profile_picture = $request->profile_picture;
                $devs->save();
                Session::put('dev_id', $devs->id);
                return response()->json(['success' => $devs, 'message' => "New Dev Added To DB"]);
            } else {
                $devs = Developer::where("id", '=', $request->input("dev_id"))->first();
                $devs->first_name = $request->first_name;
                $devs->last_name = $request->last_name;
                $devs->phone_number = $request->phone_number;
                $devs->email = $request->email;
                $devs->rate = $request->rate;
                $devs->about = $request->about;
                $devs->profile_picture = $request->profile_picture;
                $devs->skills = $request->skills;
                $devs->save();
                Session::put('dev_id', $devs->id);
                return response()->json(['success' => $devs, 'message' => "Dev Updated"]);
            }
        } else if ($type == 'save_dev_files') {
            $dev = Developer::where('id', '=', Session::get('dev_id'))->first();
            // return $dev;
            // $attachment = $dev->attach(public_path('assets/img/favicon.png'));
            $image = $request->file('file');

            $avatarName = $image->getClientOriginalName();
            $image->move(public_path('files'), $avatarName);

            $dev->attach(public_path('files/' . $avatarName));

            // return response()->json(['success' => $avatarName]);

            // $filexists = false;
            // foreach ($request->input("filenames") as $value) {
            //     $attachment =  DB::table("attachments")->where("filename", '=', $value)->get();
            //     if (count($attachment) > 0) {
            //         $filexists = true;
            //     } else {
            //         $dev->attach(public_path('files/' . $value));
            //         $filexists = false;
            //     }
            // }

            // if ($filexists) {
            //     return response()->json(['success' => 'Done', 'message' => "File Already Exist"]);
            // }
            return response()->json(['success' => 'Done', 'message' => "Attachments Added."]);
        } else if ($type == 'save_portfolio_links') {
            $dev = Developer::where('id', '=', $request->input("dev_id"))->first();
            $dev->portfolio_links = $request->input("portfolio_links");
            $dev->save();
            return response()->json(['success' => 'Portfolio Links Added']);
        }
    }

    public function destroy(Request $request)
    {
        $type = $request->input("type");
        if ($type == 'delete_files') {
            $att = Attachment::where('filename', '=', $request->input("file_name"))->delete();
            unlink(public_path('files/' . $request->input("file_name")));
            return response()->json(['success' => 'File Deleted']);
        }
    }

    // public function storeFiles(Request $request)
    // {
    //     $image = $request->file('file');

    //     $avatarName = $image->getClientOriginalName();
    //     $image->move(public_path('files'), $avatarName);


    //     return response()->json(['success' => $avatarName]);
    // }

    public function AddFiles(Request $request)
    {
    }

    public function removeFile(Request $request)
    {
    }

    public function AddLinks(Request $request)
    {
    }
}
