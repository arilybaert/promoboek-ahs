<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\User;
class PortfolioController extends Controller
{
    public function getCMO()
    {
        // $sub_courses = Sub_course::where('course_id', 1)->get();

        // Show thumbail picture for each user

        $students = User::where('course_id', '1')
        ->join('images', function ($join) {
            $join->on('users.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        // echo '<pre>' . var_export($users, true) . '</pre>';


        return view('pages.cmo-home', [
            // 'sub_courses' => $sub_courses,
            'students' => $students,
            'sub_header' => 'Crossmedia',
            ]);
    }

    public function getCMOPD()
    {
        // Show thumbail picture for each student

        $students = User::where('course_id', '1')
        ->where('sub_course_id', '2')
        ->join('images', function ($join) {
            $join->on('users.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        return view('pages.cmo-home', [
            // 'sub_courses' => $sub_courses,
            'students' => $students,
            'sub_header' => 'Photo Design',
            ]);
    }

    public function getCMOGD()
    {
        // Show thumbail picture for each student

        $students = User::where('course_id', '1')
        ->where('sub_course_id', '1')
        ->join('images', function ($join) {
            $join->on('users.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        return view('pages.cmo-home', [
            // 'sub_courses' => $sub_courses,
            'students' => $students,
            'sub_header' => 'Graphic Design',
            ]);
    }

    public function getCMODetail(User $user)
    {
        $images = Image::where('student_id', $user->id)->get();

        // echo '<pre>' . var_export($images, true) . '</pre>';
        // dd($user);
        return view('pages.cmo-detail', [
            'sub_header' => $user->first_name . ' <br> ' . $user->last_name,
            'images' => $images,
            'student' => $user
        ]);
    }

    public function getAVD()
    {
        return view('pages.avd-home', [

        ]);
    }

    public function getNMD()
    {
        // Show thumbail picture for each student

        $students = User::where('course_id', '3')
        ->join('images', function ($join) {
            $join->on('users.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        return view('pages.nmd-home', [
            'students' => $students,
            'sub_header' => 'New Media Development',
            ]);

    }
    public function getNMDDetail(User $user)
    {
        $images = Image::where('student_id', $user->id)->get();

        // echo '<pre>' . var_export($images, true) . '</pre>';

        return view('pages.nmd-detail', [
            'sub_header' => $user->first_name . ' <br> ' . $user->last_name,
            'images' => $images,
            'student' => $user
        ]);
    }

    public function getGMB()
    {
        // $sub_courses = Sub_course::where('course_id', 1)->get();

        // Show thumbail picture for each student

        $students = User::where('course_id', '4')
        ->join('images', function ($join) {
            $join->on('users.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        // echo '<pre>' . var_export($students, true) . '</pre>';


        return view('pages.gmb-home', [
            // 'sub_courses' => $sub_courses,
            'students' => $students,
            'sub_header' => 'Grafimediabeleid',
            ]);
    }
    public function getGMBPM()
    {
        // Show thumbail picture for each student

        $students = User::where('course_id', '4')
        ->where('sub_course_id', '3')
        ->join('images', function ($join) {
            $join->on('users.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        return view('pages.gmb-home', [
            // 'sub_courses' => $sub_courses,
            'students' => $students,
            'sub_header' => 'Photo Design',
            ]);
    }

    public function getGMBCM()
    {
        // Show thumbail picture for each student

        $students = User::where('course_id', '4')
        ->where('sub_course_id', '4')
        ->join('images', function ($join) {
            $join->on('users.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        return view('pages.gmb-home', [
            // 'sub_courses' => $sub_courses,
            'students' => $students,
            'sub_header' => 'Graphic Design',
            ]);
    }
}
