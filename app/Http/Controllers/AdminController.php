<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Sub_course;
use App\Models\Job;

class AdminController extends Controller
{
    /* ********************************** USERS ********************************** */

    // ADMIN DASHBOARD
    public function index()
    {
        $requests = User::where('request', true)->orderBy('last_name')->get();
        $cmo_students = User::where('role', 2)->where('course_id', 1)->where('request', '=', false)->orderBy('last_name')->get();
        $avd_students = User::where('role', 2)->where('course_id', 2)->where('request', '=', false)->orderBy('last_name')->get();
        $nmd_students = User::where('role', 2)->where('course_id', 3)->where('request', '=', false)->orderBy('last_name')->get();
        $gmb_students = User::where('role', 2)->where('course_id', 4)->where('request', '=', false)->orderBy('last_name')->get();
        $teachers = User::where('role', 2)->where('course_id', 5)->where('request', '=', false)->orderBy('last_name')->get();
        $admins = User::where('role', 1)->orderBy('last_name')->get();

        return view('backoffice.admin', [
            'requests' => $requests,
            'cmo_students' => $cmo_students,
            'avd_students' => $avd_students,
            'nmd_students' => $nmd_students,
            'gmb_students' => $gmb_students,
            'teachers' => $teachers,
            'admins' => $admins
        ]);
    }

    // UPGRADE USER TO ADMINISTRATOR
    public function makeAdmin(User $user)
    {
        $data = [
            'role' => 1
        ];

        if($user->id){
            $user = User::where('id', $user->id)->first();
            $user->update($data);
        };
        return redirect()->route('admin');
    }

    // DOWNGRADE ADMINISTRATOR TO USER
    public function makeUser(User $user)
    {
        $data = [
            'role' => 2
        ];

        if($user->id){
            $user = User::where('id', $user->id)->first();
            $user->update($data);
        };
        return redirect()->route('admin');
    }

    // TOGGLE ACCOUNT ON/OFF
    public function toggleUserAccount(User $user)
    {
        $data = [
            'request' => !$user->request
        ];

        if($user->id){
            $user = User::where('id', $user->id)->first();
            $user->update($data);
        };

        // return redirect()->route('admin');
        return redirect()->route('send-account-activation', [
            'name' => $user->first_name,
            'email' => $user->email
        ]);
    }

    public function getUserInfo(User $user)
    {
        // dd($user);
        $courses = Course::all();
        $sub_courses = Sub_course::all();
        return view('backoffice.admin-user-edit', [
            'user' => $user,
            'courses' => $courses,
            'sub_courses' => $sub_courses
        ]);
    }

    public function postUserInfo(Request $r)
    {
        $r->file->store('profile', ['disk' => 'profile_files']);

        // dd($r);
        $data = [
            'first_name' => $r->firstname,
            'last_name' => $r->lastname,
            'email' => $r->email,
            'course_id' => $r->course,
            'sub_course_id' => $r->sub_course,
            'catchphrase' => $r->catchphrase,
            'bio' => $r->bio,
            'profile' => 'src/img/profile/' . $r->file->hashName()
        ];
        if($r->id){
            $user = User::where('id', $r->id)->first();
            $user->update($data);
        };

        return redirect()->route('admin.user.edit', $r->id);
    }

    /* ********************************** JOBS ********************************** */
    // GET ALL JOBS
    public function getJobs()
    {
        $pending_jobs = Job::where('pending', true)->orderBy('deadline')->get();
        $accepted_jobs = Job::where('pending', false)->orderBy('deadline')->where('completed', false)->get();
        $completed_jobs = Job::where('completed', true)->orderBy('deadline')->get();


        return view('backoffice.admin-jobs', [
            'pending_jobs' => $pending_jobs,
            'accepted_jobs' => $accepted_jobs,
            'completed_jobs' => $completed_jobs,
        ]);
    }

    // ACCEPT JOB
    public function acceptJob(Job $job)
    {
        $data = [
            'pending' => false
        ];

        if($job->id){
            $job = Job::where('id', $job->id)->first();
            $job->update($data);
        };
        return redirect()->route('admin.jobs');
    }

    // MARK JOB AS COMPLETED
    public function completeJob(Job $job)
    {
        $data = [
            'completed' => true
        ];

        if($job->id){
            $job = Job::where('id', $job->id)->first();
            $job->update($data);
        };
        return redirect()->route('admin.jobs');
    }

    // DELETE JOB
    public function deleteJob(Job $job)
    {
        Job::find($job->id)->delete();
        return redirect()->route('admin.jobs');
    }


}
