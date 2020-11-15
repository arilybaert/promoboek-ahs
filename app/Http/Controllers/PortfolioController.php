<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Sub_courses;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getCMO()
    {

        $sub_courses = Sub_courses::where('course_id', 1)->get();

        $students = Student::where('course_id', '1')->get();


        return view('pages.cmo-home', [
            'sub_courses' => $sub_courses,
            'students' => $students,
            'sub_header' => 'Crossmedia',
            'col_size' => 1
            ]);
    }
    public function getCMODetail()
    {

        return view('pages.cmo-detail');
    }
    public function getAVD()
    {

    }
    public function getNMD()
    {

    }
    public function getGMB()
    {

    }

}
