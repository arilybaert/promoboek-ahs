<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Course;

class YearbookController extends Controller
{
    public function getIndex(Request $r, $id)
    {
        $courses = Course::all();

        if(isset($id)) {
            $course = Course::where('title_short', $id)->first();
            $students = Student::where('course_id', $course->id)->get();
            return view('pages.yearbook', [
                'students' => $students,
                'courses' => $courses,

            ]);
        } else {
            $students = Student::all();

            return view('pages.yearbook', [
                'students' => $students,
                'courses' => $courses,
            ]);
        }

    }
    public function getCMO(Request $r, $id)
    {

    }
}
