<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function getIndex()
    {
        $jobs = Job::where('pending', false)->where('completed', false)->get();
        return view('pages.jobs', [
            'sub_header' => 'Zoekertjes',
            'jobs' => $jobs
        ]);
    }

    public function createJob()
    {
        return view('pages.jobs-new', [
            'sub_header' => 'Zoekertjes'
        ]);
    }

    public function postNewJob(Request $r)
    {
        $data = [
            'title' => $r->title,
            'tags' => $r->hashtags,
            'content' => $r->description,
            'first_name' => $r->first_name,
            'last_name' => $r->last_name,
            'email' => $r->email,
            'phone' => $r->phone,
            'deadline' => $r->deadline,
            'completed' => false,
            'pending' => true,
        ];
        Job::create($data);

        return redirect()->route('job-confirmation');
    }

    public function jobConfirmation()
    {
        return view('pages.job-confirmation', [
            'sub_header' => 'Zoekertjes'
        ]);
    }
}
