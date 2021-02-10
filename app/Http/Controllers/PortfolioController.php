<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Student;
use App\Models\Sub_course;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getCMO()
    {
        // $sub_courses = Sub_course::where('course_id', 1)->get();

        // Show thumbail picture for each student

        $students = Student::where('course_id', '1')
        ->join('images', function ($join) {
            $join->on('students.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        // echo '<pre>' . var_export($students, true) . '</pre>';


        return view('pages.cmo-home', [
            // 'sub_courses' => $sub_courses,
            'students' => $students,
            'sub_header' => 'Crossmedia',
            ]);
    }

    public function getCMOPD()
    {
        // Show thumbail picture for each student

        $students = Student::where('course_id', '1')
        ->where('sub_course_id', '2')
        ->join('images', function ($join) {
            $join->on('students.id', '=', 'images.student_id')
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

        $students = Student::where('course_id', '1')
        ->where('sub_course_id', '1')
        ->join('images', function ($join) {
            $join->on('students.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        return view('pages.cmo-home', [
            // 'sub_courses' => $sub_courses,
            'students' => $students,
            'sub_header' => 'Graphic Design',
            ]);
    }

    public function getCMODetail(Student $student)
    {
        $images = Image::where('student_id', $student->id)->get();

        // echo '<pre>' . var_export($images, true) . '</pre>';

        return view('pages.cmo-detail', [
            'sub_header' => $student->first_name . ' <br> ' . $student->last_name,
            'images' => $images,
            'student' => $student
        ]);
    }

    public function getAVD()
    {

    }

    public function getNMD()
    {
        // Show thumbail picture for each student

        $students = Student::where('course_id', '3')
        ->join('images', function ($join) {
            $join->on('students.id', '=', 'images.student_id')
                 ->where('images.thumbnail', '=', 1);
        })->get();

        return view('pages.nmd-home', [
            'students' => $students,
            'sub_header' => 'New Media Development',
            ]);

    }
    public function getNMDDetail(Student $student)
    {
        $images = Image::where('student_id', $student->id)->get();

        // echo '<pre>' . var_export($images, true) . '</pre>';

        return view('pages.nmd-detail', [
            'sub_header' => $student->first_name . ' <br> ' . $student->last_name,
            'images' => $images,
            'student' => $student
        ]);
    }
    public function getGMB()
    {

    }

}
