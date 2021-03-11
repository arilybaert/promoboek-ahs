<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
class YearbookController extends Controller
{
    public function getIndex(Request $r, $id = null)
    {
        $courses = Course::all();

        // filter students
        if($id != null) {
            $course = Course::where('title_short', $id)->first();
            $students = User::where('course_id', $course->id)->get();
            return view('pages.yearbook', [
                'students' => $students,
                'courses' => $courses,
                'sub_header' => 'Yearbook',
                'id' => $id
            ]);

        // show all students
        } else {
            $students = User::all();

            return view('pages.yearbook', [
                'students' => $students,
                'courses' => $courses,
                'sub_header' => 'Yearbook',
                'id' => false

            ]);
        }

    }
}
